<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
class TimeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Time::get();
        return view('date_manage.index',$data);
    }

    public function add()
    {
        return view('date_manage.add');
    }

    public function insert(Request $request)
    {
        $check = Time::where('year',$request->year)->where('type',$request->type)->first();
        if (@$check!="") {
            return redirect()->back()->with('error','Data already present in this year');
        }
        $time = new Time;
        $time->year = $request->year;
        $time->from_date = $request->from_date;
        $time->end_date = $request->end_date;
        $time->type = $request->type;
        $time->save();
        return redirect()->back()->with('success','Data Added Successfully');

    }

    public function delete($id)
    {
        Time::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deletd Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Time::where('id',$id)->first();
        return view('date_manage.edit',$data);
    }

    public function update(Request $request)
    {
        $check = Time::where('year',$request->year)->where('id','!=',$request->id)->where('type',$request->type)->first();
        if (@$check!="") {
            return redirect()->back()->with('error','Data already present in this year');
        }
        Time::where('id',$request->id)->update([
            'year'=>$request->year,
            'from_date'=>$request->from_date,
            'end_date'=>$request->end_date,
            'type'=>$request->type,
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
