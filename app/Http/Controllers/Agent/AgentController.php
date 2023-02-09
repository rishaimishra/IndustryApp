<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\Agent;
use App\Mail\MailChange;
class AgentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = [];
        $data['data'] = User::whereNotIn('role',['SA','IND'])->where('status','!=','D')->get();
        return view('agent.index',$data);
    }

    public function addView()
    {
        return view('agent.add');
    }

    public function insert(Request $request)
    {
        $user = new User;
        $user->cid = $request->cid;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->designation = $request->designation;
        $user->password = \Hash::make($request->password);
        $user->role = $request->role;
        if ($request->role=="F" || $request->role=="C") {
            $user->division = $request->division;
        }else{
            $user->division = null;
        }
        $user->save();
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        Mail::send(new Agent($data));

        return redirect()->back()->with('success','User Added Successfully');
    }

    public function status($id)
    {
        $check = User::where('id',$id)->first();
        if (@$check->status=="A") {
            User::where('id',$id)->update(['status'=>'I']);
        }else{
            User::where('id',$id)->update(['status'=>'A']);
        }
        return redirect()->back()->with('success','Status Changed Successfully');
    }

    public function delete($id)
    {
        User::where('id',$id)->update(['status'=>'D']); 
        return redirect()->back()->with('success','User Deleted Successfully');  
    }


    public function edit($id)
    {
        $data = [];
        $data['data'] =  User::where('id',$id)->first();
        return view('agent.edit',$data);
    }


    public function update(Request $request)
    {
         if ($request->role=="F" || $request->role=="C") {
            $division = $request->division;
        }else{
            $division = null;
        }
        $user = User::where('id',$request->id)->first();
        if ($user->email!=$request->email) {
            $data = [
                'name'=>$user->name,
                'email'=>$user->email,
                'change_email'=>$request->email
            ];
            Mail::send(new MailChange($data));
        }
         User::where('id',$request->id)->update([
            'name'=>$request->name,
            'cid'=>$request->cid,
            'designation'=>$request->designation,
            'phone'=>$request->phone,
            'role'=>$request->role,
            'division'=>$division
         ]);
         return redirect()->back()->with('success','Data Updated Successfully');
    }
}
