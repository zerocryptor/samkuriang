<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GarbageOfficer;

class AdminController extends Controller
{
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
        $data = [
            'petugas' => \App\Models\GarbageOfficer::where ('status',1)->count(),
            'costumer' =>\App\Models\Customer::where ('status',1)->count(),
            'totalpetugas' =>\App\Models\GarbageOfficer::count(),
        ];
        return view('admin-pages.dashboard',$data);
    }

    public function garbageBankList(){
        $garbageOfficer = GarbageOfficer::all();

        return view('admin-pages.garbage-bank-list', [
            'garbage_officer' => $garbageOfficer
        ]);
    }

    public function customerList(){
        return view('admin-pages.garbage-bank-list');
    }
}
