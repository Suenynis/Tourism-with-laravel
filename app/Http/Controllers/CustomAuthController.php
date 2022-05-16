<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomAuthController extends Controller
{

    public function registration(){
        return "Registration";
    }

    public function registerUser(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user -> name = $request -> name;
        $user -> phone = $request -> phone;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $res = $user->save();
        if($res){
            return back()->with('success' ,'You have registred successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email|unique',
            'password'=>'required|min:5|max:12'
        ]);
    }
}
