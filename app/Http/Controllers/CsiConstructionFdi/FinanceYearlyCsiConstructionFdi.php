<?php

namespace App\Http\Controllers\CsiConstructionFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\FinanceCsiConstructionFdis;
class FinanceYearlyCsiConstructionFdi extends Controller
{
    public function index()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $data['data'] = FinanceCsiConstructionFdis::where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('year',$data['get_time_data']->year)->orderBy('id','desc')->get();
        return view('csi_construction_fdi_yearly.finance.index',$data);
    }

    

    public function insert(Request $request)
    {
        if (@$request->addmore) {
        foreach(@$request->addmore as $value)
        {
        $production = new FinanceCsiConstructionFdis;
        $production->year = $request->year;
        $production->total_income = $value['total_income'];
        $production->total_expenditure = $value['total_expenditure'];
        $production->profit_loss = $value['profit_loss'];
        $production->cit_bit = $value['cit_bit'];
        $production->dd = $value['dd'];
        

        $production->user_id = auth()->user()->id;
        $production->profile_id = auth()->user()->current_profile;
        $production->save();
        }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.revenue.manage-revenue-csi-construction-fdi-yearly');
        }
    }



    public function edit($id)
    {
        $data = [];
        $data['data'] = FinanceCsiConstructionFdis::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        
        if($data['data']!="")
        {
            return view('csi_construction_fdi_yearly.finance.edit',$data);
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
        FinanceCsiConstructionFdis::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
