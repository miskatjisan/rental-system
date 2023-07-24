<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdvisorInfoController extends Controller
{
    public function advisor_info_view(){
        $data = User::where('role_id_fk', 3)->latest()->get();
        // dd($data);
        return view('Admin.advisor_info', compact('data'));
    }
}
