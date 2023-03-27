<?php

namespace App\Http\Controllers\MlPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MlPamFdiEmploye;
use App\Models\Country;
use App\Models\Time;
class EmployeMlPamFdiYearly extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = MlPamFdiEmploye::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','Y')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = MlPamFdiEmploye::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','Y')->where('parent_delete_id','0')->get();
        }else{
            
            $current_year = MlPamFdiEmploye::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->first();

            
            
            if ($current_year!="") {
            
            $half_year_data = MlPamFdiEmploye::where('user_id',auth()->user()->id)->where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('type','H')->where('status','!=','D')->pluck('id')->toArray();

            $new_year_in_progress = MlPamFdiEmploye::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('type','Y')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  MlPamFdiEmploye::where('status','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($half_year_data,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = MlPamFdiEmploye::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = MlPamFdiEmploye::where('id',0)->get();
            }
        }
        $data['country'] = Country::get();
        return view('ml_pam_fdi_yearly.employe.index',$data);
    }


        public function save_next(Request $request)
    {
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new MlPamFdiEmploye;
                $production->year = $request->year;
                $production->nationality = $value['nationality'];
                $production->cid = $value['cid'];
                $production->name = $value['name'];
                $production->contact = $value['contact'];
                $production->email = $value['email'];

                $production->gender = $value['gender'];
                $production->qualification = $value['qualification'];
                $production->nature_employe = $value['nature_employe'];
                $production->placement = $value['placement'];
                $production->location = $value['location'];
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
            return redirect()->route('manage.training.ml-pam-fdi.yearly');
        }
    }


    public function add()
    {
        $data = [];
        $data['country'] = Country::get();
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        return view('ml_pam_fdi_yearly.employe.add',$data);
    }

    public function insert(Request $request)
    {
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();

        $check = MlPamFdiEmploye::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('type','Y')->where('profile_id',auth()->user()->current_profile)->first();    

        
        $previous_year = MlPamFdiEmploye::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$get_time_data->year)->where('type','H')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();


        $production = new MlPamFdiEmploye;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->nationality = $request->nationality;
        $production->cid = $request->cid;
        $production->name = $request->name;
        $production->contact = $request->contact;
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

        $production->email = $request->email;
        $production->gender = $request->gender;
        $production->qualification = $request->qualification;
        $production->nature_employe = $request->nature_employe;
        $production->placement = $request->placement;
        $production->location = $request->location;

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = MlPamFdiEmploye::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_yearly.employe.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = MlPamFdiEmploye::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();


        if ($details->year==$get_time_data->year && $details->type=="Y") {
        MlPamFdiEmploye::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        }else{
            $insert = new MlPamFdiEmploye;
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
        return redirect()->route('manage.employe.ml-pam-fdi.yearly')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = MlPamFdiEmploye::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['country'] = Country::get();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_yearly.employe.edit',$data);
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
        $production['nationality'] = $request->nationality;
        $production['cid'] = $request->cid;
        $production['name'] = $request->name;
        $production['contact'] = $request->contact;


        $production['email'] = $request->email;
        $production['gender'] = $request->gender;
        $production['qualification'] = $request->qualification;
        $production['nature_employe'] = $request->nature_employe;

        $production['placement'] = $request->placement;
        $production['location'] = $request->location;
        

        $production['user_id'] = auth()->user()->id;
        MlPamFdiEmploye::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
