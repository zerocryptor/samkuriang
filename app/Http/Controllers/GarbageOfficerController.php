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
    }   

    public function index(){
        $data = [
            'customer' => \App\Models\Customer::count(),
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3))),
            'garbage' =>\App\Models\Garbage::count(),
            'trash' => \App\Models\Garbage::select('name')->where('garbage_officer_id','=','1')->get(),
            'strange' => \App\Models\Customer::select('id','name')->where('status',0)->get()
        ];
        
        return view('garbage-officer-pages/dashboard', $data);
    }

    

    public function customers(){
        return view('garbage-officer-pages/garbage-officer-cust');
    }

    public function editCust(){
        return view('garbage-officer-pages/edit-cust');
    }
    public function editGarbage(){
        return view('garbage-officer-pages/edit-garbage');
    }
    
    public function createGarbage(){
        return view('garbage-officer-pages/create-garbage');
    }

    public function detailCust(){
        $data = [
            'garbage' =>\App\Models\Garbage::count(),
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3)))
        ];

        return view('garbage-officer-pages/detail-cust', $data);
    }

    public function approveCust($id){
        // return view('garbage-officer-pages/approve/id');
    }

    // public function notifCust(){
    //     $data = [
    //         'customer' => \App\Models\Customer::count(),

    //     ];

    //     return \App\Models\Customer::all();
    // }
}