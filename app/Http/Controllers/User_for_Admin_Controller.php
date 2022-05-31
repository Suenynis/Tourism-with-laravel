<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class User_for_Admin_Controller extends Controller
{
    public function showUsers(){

        $data = User::all();
        $data2 = Tour::all();
        return view('pages.adminUsers',['users' => $data ]);
    }

    public function showTours(){

        $data = User::all();
        return view('pages.adminUsers',['users' => $data ]);
    }

    public function check(){
        $data = Tour::all();
        return view('pages.adminIndex',['tours'=> $data]);
    }

}
