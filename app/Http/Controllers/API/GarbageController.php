<?php

namespace App\Http\Controllers\API;

use App\Models\Garbage;
use Illuminate\Http\Request;

class GarbageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'a' => 10,
            'b' => 20
        ];

        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function show(Garbage $garbage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function edit(Garbage $garbage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garbage $garbage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garbage  $garbage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garbage $garbage)
    {
        //
    }
}
