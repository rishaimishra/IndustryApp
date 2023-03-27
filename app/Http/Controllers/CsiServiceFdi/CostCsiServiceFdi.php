<?php

namespace App\Http\Controllers\CsiServiceFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\CostCsiServiceFdis;
class CostCsiServiceFdi extends Controller
{
    public function index()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;

        $year_data = CostCsiServiceFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('type','H')->where('status','!=','IP')->where('parent_delete_id','0')->get();


        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = CostCsiServiceFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{


            $previous_year = CostCsiServiceFdis::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();
            // return $previous_year;

            
            if ($previous_year!="") {
            $previous_year1 = CostCsiServiceFdis::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();



            

            // $previous_year_delete_data_yearly = Power::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();

            // $previous_year = array_diff($previous_year1,$previous_year_delete_data_yearly);

            // return $previous_year;
            $new_year_in_progress = CostCsiServiceFdis::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  CostCsiServiceFdis::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = CostCsiServiceFdis::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = CostCsiServiceFdis::where('id',0)->get();
            }


        }


        return view('csi_service_fdi.cost.index',$data);
    }

    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                
                $production = new CostCsiServiceFdis;
                $production->year = $request->year;
                $production->electricity = $value['electricity'];
                $production->water = $value['water'];
                $production->telephone = $value['telephone'];
                $production->house_rent = $value['house_rent'];

                $production->land_lease = $value['land_lease'];
                $production->shed_lease = $value['shed_lease'];
                $production->others = $value['others'];
                $production->total = $value['total'];


                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.other.cost.other.csi-service-fdi');
        }
    }

    

    public function edit($id)
    {
        $data = [];
        $data['data'] = CostCsiServiceFdis::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_service_fdi.cost.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $production = [];
        $production['year'] = $request->year;
       
        $production['electricity'] = $request->electricity;
        $production['water'] = $request->water;
        $production['telephone'] = $request->telephone;
        $production['house_rent'] = $request->house_rent;

        $production['land_lease'] = $request->land_lease;
        $production['shed_lease'] = $request->shed_lease;
        $production['others'] = $request->others;
        $production['total'] = $request->total;

        $production['user_id'] = auth()->user()->id;
        CostCsiServiceFdis::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}