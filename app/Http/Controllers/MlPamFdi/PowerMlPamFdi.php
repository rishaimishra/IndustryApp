<?php

namespace App\Http\Controllers\MlPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\MlPamFdiPower;
class PowerMlPamFdi extends Controller
{
    public function index()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;

        $year_data = MlPamFdiPower::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('type','H')->where('status','!=','IP')->where('parent_delete_id','0')->get();


        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = MlPamFdiPower::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{


            $previous_year = MlPamFdiPower::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();
            // return $previous_year;

            
            if ($previous_year!="") {
            $previous_year1 = MlPamFdiPower::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();



            

            // $previous_year_delete_data_yearly = MlPamFdiPower::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();

            // $previous_year = array_diff($previous_year1,$previous_year_delete_data_yearly);

            // return $previous_year;
            $new_year_in_progress = MlPamFdiPower::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  MlPamFdiPower::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = MlPamFdiPower::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = MlPamFdiPower::where('id',0)->get();
            }


        }


        return view('ml_pam_fdi_half.power.index',$data);
    }

    public function save_next(Request $request)
    {
        // return @$request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                
                $production = new MlPamFdiPower;
                $production->year = $request->year;
                $production->unit = $value['unit'];
                $production->approved_power = $value['approved_power'];
                $production->energy = $value['energy'];
                $production->charges = $value['charges'];
                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.employe.ml-pam-fdi');
        }
    }



    public function edit($id)
    {
        $data = [];
        $data['data'] = MlPamFdiPower::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('ml_pam_fdi_half.power.edit',$data);
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
        $production['unit'] = $request->unit;
        $production['approved_power'] = $request->approved_power;
        $production['energy'] = $request->energy;
        $production['charges'] = $request->charges;

        $production['user_id'] = auth()->user()->id;
        MlPamFdiPower::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
