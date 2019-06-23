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
        return view('admin-pages.dashboard');
    }

    public function garbageBankList(){
        $garbageOfficer = GarbageOfficer::all();

        return view('admin-pages.garbage-bank-list', [
            'garbage-officer' => $garbageOfficer
        ]);
    }

    public function customerList(){
        return view('admin-pages.garbage-bank-list');
    }
}
