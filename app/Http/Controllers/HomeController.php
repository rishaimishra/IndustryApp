<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }

     public function changeView()
    {
        return view('change_password');
    }

    public function checkOld(Request $request)
    {
         $oldpassword = $request->input('oldpassword');
        if (!\Hash::check($oldpassword,auth()->user()->password)) {
            $valid = "false";
        }else{
             $valid = "true";
        }
        return $valid;
    }

    public function confrim(Request $request)
    {
        // checking old password matched or not 
        $oldpassword = $request->input('oldpassword');
        if (!\Hash::check($oldpassword,auth()->user()->password)) {
            return redirect()->back()->with('error','You have entered wrong old password');
        }
        
        $updatepassword = User::where('id',auth()->user()->id)->update([
        'password'=>\Hash::make($request->input('password'))
        ]);
        return redirect()->back()->with('success','Password updated successfully');
    }

    public function profile()
    {
        return view('profile');
    }

    public function checkemail(Request $request)
    {
        if (@$request->id) {
           $chk=User::where('id','!=',$request->id)->where('email',$request->email)->count();
            if ($chk>0) {
                $valid = "false";
            }else{
                $valid = "true";
            }
        }else{
            $chk=User::where('email',$request->email)->count();
            if ($chk>0) {
                $valid = "false";
            }else{
                $valid = "true";
            }
        }
        
        return $valid;
    }

    public function profileUpdate(Request $request)
    {
              $upd=[];
              $upd['name']=$request->name;
              $upd['email']=$request->email;
              if ($request->hasFile('image'))
            {
                 @unlink('storage/app/public/image/' .auth()->user()->image);
                 $image = $request->image;
                 $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
                 $image->move("storage/app/public/image",$filename);
                 $upd['image'] = $filename;
                }
        $update = User::where('id',auth()->user()->id)->update($upd);
        return redirect()->back()->with('success','Profile updated successfully');
    }
}
