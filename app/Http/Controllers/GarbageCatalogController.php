<?php

namespace App\Http\Controllers;

use App\GarbageCatalog;
use Illuminate\Http\Request;
use DB;

class GarbageCatalogController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\GarbageCatalog  $garbageCatalog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataGarbageWithId = DB::table('garbage_catalogs')
        ->select('garbage_catalogs.name', 'garbage_catalogs.age', 'garbage_types.name as type', 'garbage_catalogs.background_images', 'garbage_catalogs.description', 'garbage_types.description as description_type')
        ->leftJoin('garbage_types', 'garbage_catalogs.garbage_type_id', '=', 'garbage_types.id')
        ->where('garbage_catalogs.name',$id)
        ->get();
        
        return response()->json(
            $dataGarbageWithId[0]
        );
    }
}
