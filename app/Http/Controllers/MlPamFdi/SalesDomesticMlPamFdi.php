<?php

namespace App\Http\Controllers\MlPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\MlPamFdiSalesDomestic;
use App\Models\MlPamFdiProduction;
class SalesDomesticMlPamFdi extends Controller
{
    public function index()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;

        $data['data'] = MlPamFdiSalesDomestic::where('status','!=','D')->where('type','H')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('profile_id',auth()->user()->current_profile)->where('year',$year)->get();
        return view('ml_pam_fdi_half.sales_domestic.index',$data);
    }


    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            
            foreach(@$request->addmore as $value)
            {
                MlPamFdiSalesDomestic::where('product_id',$value['product_id'])->update([
                    'quantity'=>$value['quantity'],
                    'price'=>$value['price'],
                    'value_of_sale'=>$value['value_of_sale'],
                    'status'=>'AA',
                ]);
            }    
        }

        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.sales.export.ml-pam-fdi');
        }  
    }

 

    public function add()
    {
        $data = [];
        $data['data'] = MlPamFdiProduction::where('status','!=','D')->where('type','H')->where('user_id',auth()->user()->id)->get();
        return view('sales_domestic.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new MlPamFdiSalesDomestic;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->product_id = $request->product_id;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;


        $production->price = $request->price;
        $production->value_of_sale = $request->value_of_sale;
        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = MlPamFdiSalesDomestic::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('sales_domestic.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        MlPamFdiSalesDomestic::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.sales.domestic')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = MlPamFdiSalesDomestic::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['products'] = MlPamFdiProduction::where('status','!=','D')->where('user_id',auth()->user()->id)->get();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_half.sales_domestic.edit',$data);
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
        // $production['product_id'] = $request->product_id;
        $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;


        $production['price'] = $request->price;
        $production['value_of_sale'] = $request->value_of_sale;
        $production['user_id'] = auth()->user()->id;
        MlPamFdiSalesDomestic::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
