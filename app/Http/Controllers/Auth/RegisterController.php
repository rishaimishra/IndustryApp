<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Confirm;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function checkemail(Request $request)
    {

        $chk=User::where('email',$request->email)->count();
        if ($chk>0) {
            $valid = "false";
        }else{
            $valid = "true";
        }
        return $valid;
    }


    public function registerIndustry(Request $request)
    {
        $user = new User;
        $user->cid = $request->cid;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->phone = $request->phone;
        $user->designation = $request->designation;
        $user->dob = $request->dob;
        $user->save();
        $update_vcode = User::where('id',$user->id)->update(['email_vcode'=>time()]);
        $get_vcode = User::where('email',$request->email)->first();
        $data = [
                'email'=>$request->email,
                'name'=>$get_vcode->name,
                'email_vcode'=>$get_vcode->email_vcode,
                'id'=>$get_vcode->id,
        ];
        Mail::send(new Confirm($data));
        return redirect()->route('register.industry.splash.screen');
    }

    public function splashScreen()
    {
        return view('auth.after');
    }

    public function verify($id,$vcode)
    {
       $data = User::where('email_vcode',$vcode)->where('id',$id)->first();
       if ($data===null) {
           return redirect()->route('login')->with('error','Link expired');
       }
       User::where('email_vcode',$vcode)->where('id',$id)->update(['status'=>'A','email_vcode'=>'']);
       return redirect()->route('login')->with('success','Account Verified.Please do login');
    }
}
