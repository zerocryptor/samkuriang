<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GarbageOfficerController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:garbage_officer', 'verified']);
        // $this->middleware('auth:garbage_officer');
    }   

    public function index(){
        $data = [
            'customer' => \App\Models\Customer::count(),
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3))),
            'garbage' =>\App\Models\Garbage::count(),
            'trash' => \App\Models\Garbage::select('name')
        ];
        
    
        return view('garbage-officer-pages/dashboard', $data);
    }

    public function customers(){
        return view('garbage-officer-pages/garbage-officer-cust');
    }

    public function editCust(){
        return view('garbage-officer-pages/edit-cust');
    }

    public function detailCust(){
        return view('garbage-officer-pages/detail-cust');
    }
    

}