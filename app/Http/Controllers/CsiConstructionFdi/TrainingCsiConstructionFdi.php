<?php

namespace App\Http\Controllers\CsiConstructionFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingCsiConstructionFdis;
use App\Models\Time;



class TrainingCsiConstructionFdi extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;

        $year_data = TrainingCsiConstructionFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('type','H')->where('status','!=','IP')->where('parent_delete_id','0')->get();
        // return $year_data;

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = TrainingCsiConstructionFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{


            $previous_year = TrainingCsiConstructionFdis::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();
            // return $previous_year;

            
            if ($previous_year!="") {
            $previous_year1 = TrainingCsiConstructionFdis::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();


            // return $previous_year;
            $new_year_in_progress = TrainingCsiConstructionFdis::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  TrainingCsiConstructionFdis::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = TrainingCsiConstructionFdis::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = TrainingCsiConstructionFdis::where('id',0)->get();
            }


        }
        return view('csi_construction_fdi.training.index',$data);
    }


    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new TrainingCsiConstructionFdis;
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
                $production->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.half.yearly.submission');
        }
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        return view('csi_construction_fdi.training.add',$data);
    }

    public function insert(Request $request)
    {
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        $check = TrainingCsiConstructionFdis::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('profile_id',auth()->user()->current_profile)->where('type','H')->first();  

        // return $check;



        $previous_year = TrainingCsiConstructionFdis::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->where('year','<',$get_time_data->year)->where('type','Y')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();

        // return $previous_year;


        $production = new TrainingCsiConstructionFdis;
        $production->year = $request->year;
        
        $production->name = $request->name;
        $production->number_employee = $request->number_employee;

        $production->start_date = $request->start_date;
        $production->end_date = $request->end_date;
        $production->rgob = $request->rgob;
        $production->self = $request->self;

        $production->profile_id = auth()->user()->current_profile;

        if($check!=""){
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
        $data['data'] = TrainingCsiConstructionFdis::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('csi_construction_fdi.training.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = TrainingCsiConstructionFdis::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();


        if ($details->year==$get_time_data->year) {    
        TrainingCsiConstructionFdis::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        }else{
            $insert = new TrainingCsiConstructionFdis;
            $insert->status='D';
            $insert->parent_delete_id=$details->id;
            $insert->year=$get_time_data->year;
            $insert->user_id=auth()->user()->id;
            $insert->profile_id=auth()->user()->current_profile;
            $insert->reason=$request->reason;
            $insert->delete_date=date('Y-m-d');
            $insert->save();
        }
        return redirect()->route('manage.training-csi-construction')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = TrainingCsiConstructionFdis::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_construction_fdi.training.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $production = [];
        $production['year'] = $request->year;
        
        $production['name'] = $request->name;
        // $production['provider'] = $request->provider;
        $production['number_employee'] = $request->number_employee;

         $production['start_date'] = $request->start_date;
          $production['end_date'] = $request->end_date;
           $production['rgob'] = $request->rgob;
            $production['self'] = $request->self;
        

        $production['user_id'] = auth()->user()->id;
        TrainingCsiConstructionFdis::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
