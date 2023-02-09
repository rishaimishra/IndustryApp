<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;
class CurrencyController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Currency::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('currency.index',$data);
    }

    public function add()
    {
        $data = [];
        return view('currency.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new Currency;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->purpose = $request->purpose;
        $production->currency = $request->currency;
        $production->amount = $request->amount;

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = Currency::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('currency.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        Currency::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.currency')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Currency::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('currency.edit',$data);
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
        $production['purpose'] = $request->purpose;
        $production['currency'] = $request->currency;
        $production['amount'] = $request->amount;

        $production['user_id'] = auth()->user()->id;
        Currency::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
