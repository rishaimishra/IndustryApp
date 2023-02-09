<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RawMaterial;
use App\Models\Country;
class RawMaterialController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = RawMaterial::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('raw_material.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['country'] = Country::get();
        return view('raw_material.add',$data);
    }

    public function insert(Request $request)
    {
        $production = new RawMaterial;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->name = $request->name;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;


        $production->price = $request->price;
        $production->value_raw = $request->value_raw;
        $production->country = $request->country;
        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = RawMaterial::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('raw_material.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        RawMaterial::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.raw.material')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = RawMaterial::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['country'] = Country::get();
        if($data['data']!="")
        {
            return view('raw_material.edit',$data);
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
        $production['name'] = $request->name;
        $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;


        $production['price'] = $request->price;
        $production['value_raw'] = $request->value_raw;
        $production['country'] = $request->country;
        $production['user_id'] = auth()->user()->id;
        RawMaterial::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
