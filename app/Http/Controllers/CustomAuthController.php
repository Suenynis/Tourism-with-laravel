<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
//use MongoDB\Driver\Session;
use Session;
use Auth;

class CustomAuthController extends Controller
{

    public function registration(){
        return "Registration";
    }

    public function registerUser(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user -> name = $request -> name;
        $user -> phone = $request -> phone;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user->assignRole('user');
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
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('email' ,'=' ,$request->email)->first();
        if($user){
           if(Hash::check($request->password,$user ->password)){
               $request->session()->put('loginId', $user->id);

               //return view('pages.adminMain', compact('user'));
               auth('web')->login($user);
               redirect(route('home'));
               return view('pages.index',compact('user'));
           }
            return back()->with('fail','The password is not correct');
        }

            return back()->with('fail','This User not registred');

    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('/',compact('data'));
    }

    public function logout(){
         Session::flush();

        \Auth::logout();

        return redirect('login');

    }

}
