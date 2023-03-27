<?php

namespace App\Http\Controllers\CsiConstructionFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Country;
use App\Models\ServiceCsiConstructionFdis;
use App\Models\SalesCsiConstructionFdis;
class SalesYearlyCsiConstructionFdi extends Controller
{
     public function index()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        $data['data'] = SalesCsiConstructionFdis::where('status','!=','D')->where('type','Y')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('profile_id',auth()->user()->current_profile)->where('year',$year)->get();
        $data['country'] = Country::get();
        return view('csi_construction_fdi_yearly.sales_export.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['data'] = ServiceCsiConstructionFdis::where('status','!=','D')->where('type','Y')->where('user_id',auth()->user()->id)->get();
        return view('csi_construction_fdi_yearly.sales_export.add',$data);
    }

        public function save_next(Request $request)
    {
        if (@$request->addmore) {
            // return $request->addmore;
            foreach(@$request->addmore as $value)
            {
                SalesCsiConstructionFdis::where('product_id',$value['product_id'])->update([
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
            return redirect()->route('manage.raw.material.csi-construction-fdi.yearly');
        }  
    }

    public function insert(Request $request)
    {
        $production = new SalesCsiConstructionFdis;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->product_id = $request->product_id;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;
        $production->type = 'Y';


        $production->price = $request->price;
        $production->value_of_sale = $request->value_of_sale;
        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }


    public function edit($id)
    {
        $data = [];
        $data['data'] = SalesCsiConstructionFdis::where('id',$id)->where('type','Y')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['products'] = ServiceCsiConstructionFdis::where('status','!=','D')->where('user_id',auth()->user()->id)->get();
        $data['country'] = Country::get();
        if($data['data']!="")
        {
            return view('csi_construction_fdi_yearly.sales_export.edit',$data);
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
        SalesCsiConstructionFdis::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
