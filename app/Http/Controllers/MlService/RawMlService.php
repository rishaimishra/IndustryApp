<?php

namespace App\Http\Controllers\MlService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\MlDomesticRaw;
use App\Models\Country;
use App\Models\TypeRaw;
class RawMlService extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;

        $year_data = MlDomesticRaw::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('type','H')->where('status','!=','IP')->where('parent_delete_id','0')->get();
        // return $year_data;

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = MlDomesticRaw::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{


            $previous_year = MlDomesticRaw::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();
            // return $previous_year;

            
            if ($previous_year!="") {
            $previous_year1 = MlDomesticRaw::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();



            

            // $previous_year_delete_data_yearly = MlDomesticRaw::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();

            // $previous_year = array_diff($previous_year1,$previous_year_delete_data_yearly);

            // return $previous_year;
            $new_year_in_progress = MlDomesticRaw::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  MlDomesticRaw::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = MlDomesticRaw::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = MlDomesticRaw::where('id',0)->get();
            }


        }
        $data['country'] = Country::get();
        $data['type_raw'] = TypeRaw::get();

        return view('ml_service.raw_material.index',$data);
    }


    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new MlDomesticRaw;
                $production->year = $request->year;
                $production->name = $value['name'];
                $production->unit = $value['unit'];
                $production->quantity = $value['quantity'];
                $production->price = $value['price'];
                $production->value_raw = $value['value_raw'];
                $production->country = $value['country'];
                $production->type_of_raw = $value['type_of_raw'];
                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.cost.ml-domestic-service');
        }
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $data['country'] = Country::get();
        $data['type_raw'] = TypeRaw::get();
        return view('ml_service.raw_material.add',$data);
    }

    public function insert(Request $request)
    {

        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        $check = MlDomesticRaw::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('profile_id',auth()->user()->current_profile)->where('type','H')->first();  

        // return $check;



        $previous_year = MlDomesticRaw::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->where('year','<',$get_time_data->year)->where('type','Y')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();



        $production = new MlDomesticRaw;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->name = $request->name;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;
        $production->type_of_raw = $request->type_raw;
        $production->profile_id = auth()->user()->current_profile;

        if($check!=""){
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
        $data['data'] = MlDomesticRaw::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_service.raw_material.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {

        $details = MlDomesticRaw::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();


        if ($details->year==$get_time_data->year) {    
        MlDomesticRaw::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
       }else{
            $insert = new MlDomesticRaw;
            $insert->status='D';
            $insert->parent_delete_id=$details->id;
            $insert->year=$get_time_data->year;
            $insert->user_id=auth()->user()->id;
            $insert->profile_id=auth()->user()->current_profile;
            $insert->reason=$request->reason;
            $insert->delete_date=date('Y-m-d');
            $insert->save();
       }
        return redirect()->route('manage.raw.material.csi-service')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = MlDomesticRaw::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['country'] = Country::get();
        $data['type_raw'] = TypeRaw::get();
        if($data['data']!="")
        {
            return view('ml_service.raw_material.edit',$data);
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
        MlDomesticRaw::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
