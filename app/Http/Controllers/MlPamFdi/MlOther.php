<?php

namespace App\Http\Controllers\MlPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\MlPamFdiOther;
class MlOther extends Controller
{
    public function index()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $data['data'] = MlPamFdiOther::where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('year',$data['get_time_data']->year)->orderBy('id','desc')->get();

        // return $data['data'];
        return view('ml_pam_fdi_yearly.other.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        return view('ml_pam_fdi_yearly.other.add',$data);
    }

    public function insert(Request $request)
    {
        if (@$request->addmore) {
        foreach(@$request->addmore as $value)
        {
        $production = new MlPamFdiOther;
        $production->year = $request->year;
        $production->asset = $value['asset'];
        $production->loan = $value['loan'];
        $production->a_share = $value['a_share'];

        $production->a_capital = $value['a_capital'];
        $production->p_share = $value['p_share'];
        $production->p_capital = $value['p_capital'];
        $production->surplus = $value['surplus'];
        

        $production->user_id = auth()->user()->id;
        $production->profile_id = auth()->user()->current_profile;
        $production->save();
        }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.finance');
        }
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = MlPamFdiOther::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_yearly.other.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        MlPamFdiOther::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.other')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = MlPamFdiOther::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('ml_pam_fdi_yearly.other.edit',$data);
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
        $production['asset'] = $request->asset;
        $production['loan'] = $request->loan;
        $production['a_share'] = $request->a_share;


        $production['a_capital'] = $request->a_capital;
        $production['p_share'] = $request->p_share;
        $production['p_capital'] = $request->p_capital;

        $production['surplus'] = $request->surplus;
        
        

        $production['user_id'] = auth()->user()->id;
        MlPamFdiOther::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
