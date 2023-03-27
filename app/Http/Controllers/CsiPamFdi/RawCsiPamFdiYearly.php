<?php

namespace App\Http\Controllers\CsiPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CsiPamFdiRaw;
use App\Models\Country;
use App\Models\Time;
use App\Models\TypeRaw;
class RawCsiPamFdiYearly extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = CsiPamFdiRaw::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','Y')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = CsiPamFdiRaw::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','Y')->where('parent_delete_id','0')->get();
        }else{
            
            $current_year = CsiPamFdiRaw::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->first();

            
            
            if ($current_year!="") {
            
            $half_year_data = CsiPamFdiRaw::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->pluck('id')->toArray();

            $new_year_in_progress = CsiPamFdiRaw::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('type','Y')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  CsiPamFdiRaw::where('status','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($half_year_data,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = CsiPamFdiRaw::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = CsiPamFdiRaw::where('id',0)->get();
            }
        }
        $data['country'] = Country::get();
        $data['type_raw'] = TypeRaw::get();
        return view('csi_pam_fdi_yearly.raw_material.index',$data);
    }

    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new CsiPamFdiRaw;
                $production->year = $request->year;
                $production->name = $value['name'];
                $production->unit = $value['unit'];
                $production->quantity = $value['quantity'];
                $production->price = $value['price'];
                $production->value_raw = $value['value_raw'];
                $production->type_of_raw = $value['type_of_raw'];
                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->country = $value['country'];
                $production->status = 'AA';
                $production->type = 'Y';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.cost.csi-pam-fdi.yearly');
        }
    }

    public function add()
    {
        $data = [];
        $data['country'] = Country::get();
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $data['type_raw'] = TypeRaw::get();
        return view('csi_pam_fdi_yearly.raw_material.add',$data);
    }

    public function insert(Request $request)
    {

        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();

        $check = CsiPamFdiRaw::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('type','Y')->where('profile_id',auth()->user()->current_profile)->first();    

        
        $previous_year = CsiPamFdiRaw::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$get_time_data->year)->where('type','H')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();



        $production = new CsiPamFdiRaw;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->name = $request->name;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;
        $production->type_of_raw = $request->type_raw;
        $production->type = 'Y';
        $production->profile_id = auth()->user()->current_profile;

        if ($check!="") {
            $production->status="AA";
        }
        elseif ($previous_year!="") {

            $production->status="IP";
         }else{
            $production->status="AA";
         }


        $production->price = $request->price;
        $production->value_raw = $request->value_raw;
        $production->country = $request->country;
        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = CsiPamFdiRaw::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('csi_pam_fdi_yearly.raw_material.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = CsiPamFdiRaw::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();

        if ($details->year==$get_time_data->year && $details->type=="Y") {     
        CsiPamFdiRaw::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        }else{
            $insert = new CsiPamFdiRaw;
            $insert->status='D';
            $insert->parent_delete_id=$details->id;
            $insert->year=$get_time_data->year;
            $insert->user_id=auth()->user()->id;
            $insert->profile_id=auth()->user()->current_profile;
            $insert->reason=$request->reason;
            $insert->delete_date=date('Y-m-d');
            $insert->type='Y';
            $insert->save();
        }
        return redirect()->route('manage.raw.material.csi-pam-fdi.yearly')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = CsiPamFdiRaw::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['country'] = Country::get();
        $data['type_raw'] = TypeRaw::get();
        if($data['data']!="")
        {
            return view('csi_pam_fdi_yearly.raw_material.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $production = [];
        $production['year'] = $request->year;
        $production['from_month'] = $request->from_month;
        $production['end_month'] = $request->end_month;
        $production['name'] = $request->name;
        $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;
        $production['type_of_raw'] = $request->type_raw;

        $production['price'] = $request->price;
        $production['value_raw'] = $request->value_raw;
        $production['country'] = $request->country;
        $production['user_id'] = auth()->user()->id;
        CsiPamFdiRaw::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
