<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use DB;

class VerificationController extends Controller
{
    public function updateGarbageOfficer($id){
        $update = DB::table('customers')->where('id',$id)->update(['status'=>1]);

        if($update){
            return redirect('garbage_officer');
        }
    }

    public function approveGarbageOfficer($id){
        $update = DB::table('garbage_officers')->where('id',$id)->update(['status'=>1]);

        if($update){
            return redirect('admin');
        }
    }
}

