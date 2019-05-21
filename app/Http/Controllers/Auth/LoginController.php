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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:user')->except('logout');
        $this->middleware('guest:garbage_officer')->except('logout');
    }
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }
    public function adminLogin(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:50',
            // 'email' => [
            //     'required', Rule::unique('garbageofficer')->ignore($id)
            // ],
            'email' => 'required|email|max:70',
            'password' => 'required|string|max:72',
            'address' => 'nullable|max:150',
            'phone_number' => 'nullable|max:16'
        ]);

       // $validator = Validator::make($request->all(), \App\Models\User::rules(false));
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    
    }

    public function showGarbageOfficerLoginForm()
    {
        return view('auth.login', ['url' => 'garbage_officer']);
    }
    public function garbageofficerLogin(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:50',
            // 'email' => [
            //     'required', Rule::unique('garbageofficer')->ignore($id)
            // ],
            'email' => 'required|email|max:70',
            'password' => 'required|string|max:72',
            'address' => 'nullable|max:150',
            'phone_number' => 'nullable|max:16'
        ]);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/garbage_officer');
        }
        return back()->withInput($request->only('email', 'remember'));
    
    }
}
