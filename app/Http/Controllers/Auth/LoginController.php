<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ResetPassword;
use Mail;
use Auth;
use Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    public function customLogin(Request $request)
    {
        $userDataEmail=User::where('email',$request->username)->first();
        if ($userDataEmail) {
          
           if (!\Hash::check($request->password,$userDataEmail->password)) {
               return redirect()->back()->with('error','Incorrect Password');
            }
   
            
            Auth::login($userDataEmail);
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error','Wrong Credentials Are Given');
        }
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();
        return $this->loggedOut($request) ?: redirect('/login');
    }


    public function forgetShow()
    {
        return view('forget_password.forget_password');
    }

    public function forgetPassword(Request $request)
    {
        $getdata = User::where('email',$request->email)->first();
        if ($getdata === null) {
           return back()->with('error','This email is not registered yet');
        }else{
            $update_vcode = User::where('email',$request->email)->update(['email_vcode'=>time()]);
            $get_vcode = User::where('email',$request->email)->first();
             $data = [
                'email'=>$request->email,
                'name'=>$get_vcode->name,
                'email_vcode'=>$get_vcode->email_vcode,
                'id'=>$get_vcode->id,
                
            ];
            Mail::send(new ResetPassword($data));
            return back()->with('success','A reset password link send to your email');
        }
    }

    public function resetPassowrd($id,$vcode)
    {
       $data = User::where('email_vcode',$vcode)->where('id',$id)->first();
       if ($data===null) {
           return redirect()->route('login')->with('error','Link expired');
       }
       return view('forget_password.reset_password',compact('data'));
    }

    public function newPassword(Request $request)
    {
        $password = $request->input('password'); 
       
        $updatepassword = User::where('id',$request->id)->update([
            'password'=>Hash::make($password),
            'email_vcode'=>''
        ]); 

        return redirect()->route('login')->with('success','Password changed successfully');
    }
}
