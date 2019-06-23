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
        // $this->middleware('jwt', ['except' => ['login', 'register']]);
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
                'message' => 'Sign in sucessfully',
                'customer' => $customer[0]
                // 'token' => $this->respondWithToken($token)
                // 'customer' => $customer,
            ], 200);
        }

        return response()->json(
            [
                'error' => true,
                'message' => 'Sign in error!'
            ]
            , 200);
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

        return response()->json(
            ['message' => 'Successfully logged out']
        );
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(
            $this->guard()->refresh()
        );
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

            $getCustomer = \App\Models\Customer::where('email', $request->post('email'))->get();

            return response()->json([
                'error' => false,
                'message' => 'Register was Successfully!!',
                'customer' => $getCustomer[0],
                'code' => 200
            ], 200);

        }
    }

    public function profile($id)
    {

        try {

            $customer = \App\Models\Customer::findOrFail($id);    

            return $customer;

        } catch (\Throwable $th) {

            return [
                'message' => 'Bad Request',
                'code' => 400
            ];

        }

    }

    public function updateProfile(Request $request, $id){
        $validator = Validator::make($request->all(), \App\Models\Customer::rules(true, $id, true));

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ];

        if(!\App\Models\Customer::where('id', $id)->update($data)){

            return response()->json([
                'error'=> true,
                'message' => 'Bad Request',
                'code' => 400
            ], 200);

        } else {

            $newCustomer = \App\Models\Customer::where('id', $id)->get();

            return response()->json([
                'error' => false,
                'message' => 'Update Success',
                'code' => 201,
                'customer' => $newCustomer[0]
            ], 200);

        }
    }

    public function updatePassword(Request $request, $id){
        $getSpecifiedUser = \App\Models\Customer::findOrFail($id);

        if(!(Hash::check($request->old_password, $getSpecifiedUser->password))){

            return response()->json([

                'message' => 'password lama tidak sama dengan database'
            
            ]);

        }

        if(!\App\Models\Customer::where('id', $id)->update(['password' => Hash::make($request->password)])){
            
            return response()->json([
                'error'=> true,
                'message' => 'Bad Request',
                'code' => 400
            ], 200);

        } else {

            $newCustomer = \App\Models\Customer::where('id', $id)->get();

            return response()->json([
                'error' => false,
                'message' => 'Update Success',
                'code' => 201,
                'customer' => $newCustomer[0]
            ], 200);

        }
    }

    public function tabungan($id)
    { 
        $price = \App\Models\Savings::where('customer_id', $id)->select('price')->sum('price');
        $size = \App\Models\Savings::where('customer_id', $id)->select('size')->sum('size');

        return response()->json([
            'tabungan' => $price,
            'berat' => $size
        ]);     
    }

    public function getHistories($id)
    {
        $savings = \App\Models\Savings::leftjoin('customers','savings.customer_id','=','customer_id')
        ->select('savings.id', 'savings.price', 'savings.size', 'garbages.name', 'savings.created_at')
        ->leftjoin('garbages','savings.garbage_id','=','garbage_id')
        ->get();

        return response()->json([
            'history' => $savings
        ]);
    }

    public function getDataGarbageOfficer(){
        $getGarbageOfficer = \App\Models\GarbageOfficer::all();
        
        return response()->json([
            'data' => $getGarbageOfficer
        ]);
    }
}