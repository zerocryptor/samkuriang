<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;


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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:garbage_officer')->except('logout');
    }

    public function showGarbageOfficerLoginForm()
    {
        return view('auth.login', ['url' => 'garbage_officer']);
    }

    public function garbageofficerLogin(Request $request){
        
        $credentials = $request->only('email', 'password');

        if (Auth::guard('garbage_officer')->attempt($credentials, $request->get('remember'))) {

            return redirect()->intended('/garbage_officer');

        }

        return back()->withInput($request->only('email', 'remember'));
    
    }
}
