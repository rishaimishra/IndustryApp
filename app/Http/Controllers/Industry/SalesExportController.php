<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesExport;
use App\Models\Production;
class SalesExportController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = SalesExport::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('sales_export.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['data'] = Production::where('status','!=','D')->where('user_id',auth()->user()->id)->get();
        return view('sales_export.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new SalesExport;
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
        $data['data'] = SalesExport::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('sales_export.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        SalesExport::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.sales.export')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = SalesExport::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['products'] = Production::where('status','!=','D')->where('user_id',auth()->user()->id)->get();
        if($data['data']!="")
        {
            return view('sales_export.edit',$data);
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
        $production['product_id'] = $request->product_id;
        $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;


        $production['price'] = $request->price;
        $production['value_of_sale'] = $request->value_of_sale;
        $production['user_id'] = auth()->user()->id;
        SalesExport::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
