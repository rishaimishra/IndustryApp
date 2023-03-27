<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Revenue;
class RevenueCsi extends Controller
{
    public function index()
    {
        // return 'sayan';
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $data['data'] = Revenue::where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$data['get_time_data']->year)->get();
        // return $data['data'];
        return view('revenue.index',$data);
    }



    public function insert(Request $request)
    {
        if (@$request->addmore) {
        foreach(@$request->addmore as $value)
        {
        $production = new Revenue;
        $production->year = $request->year;
        $production->cit_bit = $value['cit_bit'];
        $production->import = $value['import'];
        $production->sales_tax = $value['sales_tax'];

        $production->salary_tax = $value['salary_tax'];
        $production->land_rent = $value['land_rent'];
        $production->shed_rent = $value['shed_rent'];
        $production->dividend = $value['dividend'];
        $production->others = $value['others'];
        $production->total = $value['total'];
        

        $production->user_id = auth()->user()->id;
        $production->profile_id = auth()->user()->current_profile;
        $production->save();
        }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.other');
        }
    }



    public function edit($id)
    {
        $data = [];
        $data['data'] = Revenue::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('revenue.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        // return $request;
        $production = [];
        $production['year'] = $request->year;
        $production['cit_bit'] = $request->cit_bit;
        $production['import'] = $request->import;
        $production['sales_tax'] = $request->sales_tax;
        $production['salary_tax'] = $request->salary_tax;
        $production['land_rent'] = $request->land_rent;


        $production['shed_rent'] = $request->shed_rent;
        $production['dividend'] = $request->dividend;
        $production['total'] = $request->total;
        $production['others'] = $request->others;
        $production['user_id'] = auth()->user()->id;
        Revenue::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
