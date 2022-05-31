<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class User_for_Admin_Controller extends Controller
{
    public function show(){

        $data = User::all();
        return view('pages.adminUsers',['users' => $data ]);
    }
}
