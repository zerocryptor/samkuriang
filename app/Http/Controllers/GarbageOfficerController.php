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
            'customertotal' => \App\Models\Customer::where('status',1)->count(),
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3))),
            'garbagetotal' =>\App\Models\Garbage::count(),
            'garbage'=> \App\Models\Garbage::select('name','type','price')->get(),
            'trash' => \App\Models\Garbage::leftJoin('garbage_officers','garbages.garbage_officer_id','=','garbage_officer_id')->get()
        ];


        // return \App\Models\Garbage::select('name','type','price')->get();
    
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

        return view('garbage-officer-pages/create-garbage',[
            'pricelist' => \App\Models\GarbageOfficer::all()
        ]);
    }

    public function detailCust(){
        return view('garbage-officer-pages/detail-cust');
    }
    
     //CRUD//
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garbage-officer-pages/create-garbage',[
            'pricelist' => \App\Models\GarbageOfficer::all()
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Models\Garbage::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price
        ]);
        return redirect()->route('garbage-officer-pages/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}