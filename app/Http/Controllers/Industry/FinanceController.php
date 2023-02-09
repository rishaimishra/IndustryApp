<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;
class FinanceController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Finance::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('finance.index',$data);
    }

    public function add()
    {
        $data = [];
        return view('finance.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new Finance;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->total_income = $request->total_income;
        $production->total_expenditure = $request->total_expenditure;
        $production->profit_loss = $request->profit_loss;
        $production->cit_bit = $request->cit_bit;
        $production->dd = $request->dd;
        

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = Finance::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('finance.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        Finance::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.finance')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Finance::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('finance.edit',$data);
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
        $production['total_income'] = $request->total_income;
        $production['total_expenditure'] = $request->total_expenditure;
        $production['profit_loss'] = $request->profit_loss;
        $production['cit_bit'] = $request->cit_bit;
        $production['dd'] = $request->dd;
        

        $production['user_id'] = auth()->user()->id;
        Finance::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
