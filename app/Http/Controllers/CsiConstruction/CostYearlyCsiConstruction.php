<?php

namespace App\Http\Controllers\CsiConstruction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\CostCsiConstructions;
class CostYearlyCsiConstruction extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = CostCsiConstructions::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','Y')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = CostCsiConstructions::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','Y')->where('parent_delete_id','0')->get();
        }else{
            
            $current_year = CostCsiConstructions::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->first();

            
            
            if ($current_year!="") {
            
            $half_year_data = CostCsiConstructions::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->pluck('id')->toArray();

            $new_year_in_progress = CostCsiConstructions::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('type','Y')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  CostCsiConstructions::where('status','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($half_year_data,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = CostCsiConstructions::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = CostCsiConstructions::where('id',0)->get();
            }
        }
        return view('csi_construction_yearly.cost.index',$data);
    }

    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                
                $production = new CostCsiConstructions;
                $production->year = $request->year;
                $production->electricity = $value['electricity'];
                $production->water = $value['water'];
                $production->telephone = $value['telephone'];
                $production->house_rent = $value['house_rent'];

                $production->land_lease = $value['land_lease'];
                $production->shed_lease = $value['shed_lease'];
                $production->others = $value['others'];
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
            return redirect()->route('manage.other.cost.other.csi-construction.yearly');
        }
    }







    public function edit($id)
    {
        $data = [];
        $data['data'] = CostCsiConstructions::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_construction_yearly.cost.edit',$data);
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
        CostCsiConstructions::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
