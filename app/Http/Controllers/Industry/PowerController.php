<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Power;
class PowerController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Power::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('power.index',$data);
    }

    public function add()
    {
        $data = [];
        return view('power.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new Power;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->unit = $request->unit;
        $production->approved_power = $request->approved_power;
        $production->energy = $request->energy;
        $production->charges = $request->charges;

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = Power::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('power.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        Power::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.power')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Power::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('power.edit',$data);
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
        Power::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
