<?php

namespace App\Http\Controllers\Industry\Employe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Country;
class EmployeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Employee::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('employe.index',$data);
    }

    public function add()
    {
        $data = [];
        $data['country'] = Country::get();
        return view('employe.add',$data);
    }

    public function insert(Request $request)
    {
        
        $production = new Employee;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->end_month = $request->end_month;
        $production->nationality = $request->nationality;
        $production->cid = $request->cid;
        $production->name = $request->name;
        $production->contact = $request->contact;

        $production->email = $request->email;
        $production->gender = $request->gender;
        $production->qualification = $request->qualification;
        $production->nature_employe = $request->nature_employe;
        $production->placement = $request->placement;
        $production->location = $request->location;

        $production->user_id = auth()->user()->id;
        $production->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = Employee::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('employe.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        Employee::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);
        return redirect()->route('manage.employe')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Employee::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        $data['country'] = Country::get();
        if($data['data']!="")
        {
            return view('employe.edit',$data);
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
        $production['nationality'] = $request->nationality;
        $production['cid'] = $request->cid;
        $production['name'] = $request->name;
        $production['contact'] = $request->contact;


        $production['email'] = $request->email;
        $production['gender'] = $request->gender;
        $production['qualification'] = $request->qualification;
        $production['nature_employe'] = $request->nature_employe;

        $production['placement'] = $request->placement;
        $production['location'] = $request->location;
        

        $production['user_id'] = auth()->user()->id;
        Employee::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
