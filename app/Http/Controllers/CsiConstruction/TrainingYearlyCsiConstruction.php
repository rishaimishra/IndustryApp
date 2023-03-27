<?php

namespace App\Http\Controllers\CsiConstruction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingCsiConstructions;
use App\Models\Time;
class TrainingYearlyCsiConstruction extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = TrainingCsiConstructions::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','Y')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = TrainingCsiConstructions::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','Y')->where('parent_delete_id','0')->get();
        }else{
            
            $current_year = TrainingCsiConstructions::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->first();

            
            
            if ($current_year!="") {
            
            $half_year_data = TrainingCsiConstructions::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->pluck('id')->toArray();

            $new_year_in_progress = TrainingCsiConstructions::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('type','Y')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  TrainingCsiConstructions::where('status','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($half_year_data,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = TrainingCsiConstructions::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = TrainingCsiConstructions::where('id',0)->get();
            }
        }
        // return $data['data'];
        return view('csi_construction_yearly.training.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        return view('csi_construction_yearly.training.add',$data);
    }


    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new TrainingCsiConstructions;
                $production->year = $request->year;
                $production->name = $value['name'];
                // $production->provider = $value['provider'];
                $production->number_employee = $value['number_employee'];
                $production->start_date = $value['start_date'];
                $production->end_date = $value['end_date'];
                $production->rgob = $value['rgob'];
                $production->self = $value['self'];
                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->type = 'Y';
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.financemanage-financial-information-csi-construction-yearly');
        }
    }

    public function insert(Request $request)
    {
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();

        $check = TrainingCsiConstructions::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('type','Y')->where('profile_id',auth()->user()->current_profile)->first();    

        
        $previous_year = TrainingCsiConstructions::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$get_time_data->year)->where('type','H')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();


        $production = new TrainingCsiConstructions;
        $production->year = $request->year;
        // $production->from_month = $request->from_month;
        // $production->end_month = $request->end_month;
        $production->name = $request->name;
        // $production->provider = $request->provider;
        $production->number_employee = $request->number_employee;
        $production->start_date = $request->start_date;
        $production->end_date = $request->end_date;
        $production->rgob = $request->rgob;
        $production->self = $request->self;
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
        

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = TrainingCsiConstructions::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('csi_construction_yearly.training.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = TrainingCsiConstructions::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();

        if ($details->year==$get_time_data->year && $details->type=="Y") {
        TrainingCsiConstructions::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        }else{
            $insert = new TrainingCsiConstructions;
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
        return redirect()->route('manage.training-csi-construction.yearly')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = TrainingCsiConstructions::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_construction_yearly.training.edit',$data);
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
        // $production['provider'] = $request->provider;
        $production['number_employee'] = $request->number_employee;
        
        $production['start_date'] = $request->start_date;
        $production['end_date'] = $request->end_date;
        $production['rgob'] = $request->rgob;
        $production['self'] = $request->self;
        $production['user_id'] = auth()->user()->id;
        TrainingCsiConstructions::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}