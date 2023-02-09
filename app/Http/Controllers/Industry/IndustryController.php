<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\NewPassword;
use App\Mail\MailChange;
class IndustryController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = User::where('role','IND')->where('status','!=','D')->get();
        return view('industry.index',$data);
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = User::where('id',$id)->first();
        return view('industry.edit',$data);
    }

    public function update(Request $request)
    {
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
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }


    public function reset($id)
    {
        $data = User::where('id',$id)->first();
        if ($data->role=="IND") {
            $password = 'IND'.mt_rand(2000,9000);
        }else{
            $password = 'A'.mt_rand(2000,9000);
        }
        $hashed = \Hash::make($password);
        User::where('id',$id)->update(['password'=>$hashed]);
        $data = [
            'name'=>$data->name,
            'email'=>$data->email,
            'password'=>$password
        ];
        Mail::send(new NewPassword($data));
        return redirect()->back()->with('success','Password Changed Successfully');
    }
}
