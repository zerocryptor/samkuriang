<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            $customer = \App\Models\Customer::where('email', $request->post('email'))->get();
            
            return response()->json([
                'error' => false,
                'message' => 'login successfully',
                'customer' => $customer,
                'session' => $this->respondWithToken($token),
            ], 200);
        }

        return response()->json(
            [
                'error' => true,
                'message' => 'Sign in error!'
            ]
            , 401);
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json($this->guard()->user());
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    public function payload()
    {
        return auth()->payload();
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard('customers');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), \App\Models\Customer::rules(false));
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };

        $customer = new \App\Models\Customer;
        
        $customer->name = $request->post('name');
        $customer->email = $request->post('email');
        $customer->password = Hash::make($request->post('password'));
        $customer->address = $request->post('address');
        $customer->phone_number = $request->post('phone_number');
        $customer->created_at = Carbon::now();
        $customer->created_by = 'admin';

        if(!$customer->save()){
            
            return response()->json([
                'message' => 'Bad Request',
                'code' => 400
            ]);

        } else {
            
            return response()->json([
                'message' => 'Register was Successfully!!',
                'code' => 200,
            ]);

        }
    }
}
