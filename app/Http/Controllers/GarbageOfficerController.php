<?php

namespace App\Http\Controllers;
use\App\GarbageOfficer;
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
        $this->strange = \App\Models\Customer::select('id','name')->where('status',0)->get();
    }   

    public function index(){
        $data = [
            'customertotal' => \App\Models\Customer::where('status',1)->count(),
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3))),
            'garbage' =>\App\Models\Garbage::all(),
            // 'strange' => \App\Models\Customer::select('id','name')->where('status',0)->get(),
            'strange' => $this->strange,
            'garbagetotal' =>\App\Models\Garbage::count(),
            'garbage'=> \App\Models\Garbage::orderBy('id', 'asc')->get(),
            'type' => \App\Models\Garbage::select('type')->groupBy('type')->get(),
            'trash' => \App\Models\Garbage::leftJoin('garbage_officers','garbages.garbage_officer_id','=','garbage_officer_id')->get()
        ];

        // return \App\Models\Garbage::select('name','type','price')->get();
    
        return view('garbage-officer-pages/dashboard', $data);
    }

    public function customers(){
        $data = [
            'strange' => $this->strange
        ];
        return view('garbage-officer-pages/garbage-officer-cust',$data);
    }

    public function editCust(){
        $data = [
            'strange' => $this->strange
        ];
        return view('garbage-officer-pages/edit-cust',$data);
    }
    public function editGarbage(){
        $data = [
            'strange' => $this->strange
        ];
        return view('garbage-officer-pages/edit-garbage',$data);
    }
    
    public function createGarbage(){
        return view('garbage-officer-pages/create-garbage'  ,[
            'pricelist' => \App\Models\GarbageOfficer::all()
        ]);
    }

    public function detailCust(){
        $data = [
            'strange' => $this->strange,
            'saving' =>  'Rp. '.strrev(implode('.',str_split(strrev(strval(\App\Models\Savings::select('price')->sum('price'))),3))),
            // 'garbage' =>\App\Models\Garbage::all(),
            'garbagetotal' =>\App\Models\Garbage::count()
        ];
        return view('garbage-officer-pages/detail-cust',$data);
    }
    
     //CRUD//
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = \App\Models\Garbage::select('type')->groupBy('type')->get();
        return view('garbage-officer-pages.create-garbage',[
            'type' => $type,
            'strange' => \App\Models\Customer::select('id','name')->where('status',0)->get()
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

        // $validation = [
        //     'name' => 'required',
        //     'type' => 'required',
        //     'price' => 'required|numeric'
        // ];
        // $message = [
        //     'required' => 'You must fill this field',
        //     'numeric' => 'Please fill this field with number'
        // ];
        // $this->validate($request,$validation,$message);
        \App\Models\Garbage::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'garbage_officer_id' =>  auth('garbage_officer')->user()->id
        ]);
        return redirect('garbage_officer/');
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('garbage-officer-pages.edit-garbage',[
            'garbage' =>\App\Models\Garbage::select('name','type','price')->where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('garbage-officer-pages/edit-garbage',[
            'strange' => $this->strange,
            'garbage' =>\App\Models\Garbage::select('id', 'name','type','price')->where('id',$id)->first(),
            'type' => \App\Models\Garbage::select('type')->groupBy('type')->get() 
        ]);
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
        // return $id;
        \App\Models\Garbage::where('id',$id)->update(
        [
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'garbage_officer_id' =>  auth('garbage_officer')->user()->id
        ]);
        return redirect('garbage_officer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Garbage::where('id',$id)->delete();
        return redirect('garbage_officer/');
    }

}