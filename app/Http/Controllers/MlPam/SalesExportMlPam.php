<?php

namespace App\Http\Controllers\MlPam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MlpumSalesExport;
use App\Models\MlpumProduction;
use App\Models\Country;
use App\Models\Time;
class SalesExportMlPam extends Controller
{
    public function index()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        $data['data'] = MlpumSalesExport::where('status','!=','D')->where('type','H')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('profile_id',auth()->user()->current_profile)->where('year',$year)->get();
        $data['country'] = Country::get();
        return view('ml_domestic_pam_half.sales_export.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['data'] = MlpumProduction::where('status','!=','D')->where('type','H')->where('user_id',auth()->user()->id)->get();
        return view('sales_export.add',$data);
    }

    public function save_next(Request $request)
    {
        // return $request->addmore;
        if (@$request->addmore) {
            
            foreach(@$request->addmore as $value)
            {
                MlpumSalesExport::where('product_id',$value['product_id'])->update([
                    'quantity'=>$value['quantity'],
                    'price'=>$value['price'],
                    'country'=>$value['country'],
                    'value_of_sale'=>$value['value_of_sale'],
                    'status'=>'AA',
                ]);
            }    
        }

        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.raw.material.ml.pam.domestic');
        }  
    }



    public function edit($id)
    {
        $data = [];
        $data['data'] = MlpumSalesExport::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['products'] = MlpumProduction::where('status','!=','D')->where('user_id',auth()->user()->id)->get();
        $data['country'] = Country::get();
        if($data['data']!="")
        {
            return view('ml_domestic_pam_half.sales_export.edit',$data);
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
        // $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;
        $production['country'] = $request->country;


        $production['price'] = $request->price;
        $production['value_of_sale'] = $request->value_of_sale;
        $production['user_id'] = auth()->user()->id;
        MlpumSalesExport::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
