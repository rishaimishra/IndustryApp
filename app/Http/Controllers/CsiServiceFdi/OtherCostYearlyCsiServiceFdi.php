<?php

namespace App\Http\Controllers\CsiServiceFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OtherCostCsiServiceFdis;
use App\Models\Time;
class OtherCostYearlyCsiServiceFdi extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = CsiServiceOtherCost::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','Y')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = CsiServiceOtherCost::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','Y')->where('parent_delete_id','0')->get();
        }else{
            
            $current_year = CsiServiceOtherCost::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->first();

            
            
            if ($current_year!="") {
            
            $half_year_data = CsiServiceOtherCost::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->pluck('id')->toArray();

            $new_year_in_progress = CsiServiceOtherCost::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('type','Y')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  CsiServiceOtherCost::where('status','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($half_year_data,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = CsiServiceOtherCost::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = CsiServiceOtherCost::where('id',0)->get();
            }
        }
        return view('csi_service_yearly.other_cost.index',$data);
    }

    public function save_next(Request $request)
    {
          if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                
                $production = new CsiServiceOtherCost;
                $production->year = $request->year;
                $production->pol = $value['pol'];
                $production->general = $value['general'];
                $production->rm = $value['rm'];
                $production->sales_transport = $value['sales_transport'];

                $production->other_sales = $value['other_sales'];
                $production->other_costs = $value['other_costs'];
                $production->total = $value['total'];
                $production->type = 'Y';


                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.employe.manage-employment-record--csi-service-fdi-yearly');
        }
    }







    public function edit($id)
    {
        $data = [];
        $data['data'] = CsiServiceOtherCost::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_service_yearly.other_cost.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $production = [];
        $production['year'] = $request->year;
       
        $production['pol'] = $request->pol;
        $production['general'] = $request->general;
        $production['rm'] = $request->rm;
        $production['sales_transport'] = $request->sales_transport;

        $production['other_sales'] = $request->other_sales;
        $production['other_costs'] = $request->other_costs;
        $production['total'] = $request->total;

        $production['user_id'] = auth()->user()->id;
        CsiServiceOtherCost::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
