<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Other;
class OtherController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Other::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('other.index',$data);
    }

    public function add()
    {
        $data = [];
        return view('other.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new Other;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->asset = $request->asset;
        $production->loan = $request->loan;
        $production->a_share = $request->a_share;

        $production->a_capital = $request->a_capital;
        $production->p_share = $request->p_share;
        $production->p_capital = $request->p_capital;
        $production->surplus = $request->surplus;
        

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = Other::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('other.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        Other::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.other')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Other::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('other.edit',$data);
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
        Other::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
