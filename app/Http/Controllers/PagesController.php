<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function comments(): string{
        return view('pages.comments');
    }
    public function login():string{
        return view('pages.login');
    }
    public function registration(){
        return view('pages.registration');
    }
    public function tours(): string{
        return view('pages.tours');
    }
    public function adminMain(): string{
        return view('pages.adminMain');
    }
    public function adminComments(): string{
        return view('pages.adminComments');
    }
    public function adminEdit(): string{
        return view('pages.adminEdit');
    }
    public function adminIndex(): string{
        return view('pages.adminIndex');
    }
    public function adminUsers(): string{
        return view('pages.adminUsers');
    }
    public function userPage(): string{
        return view('pages.userPage');
    }
}
