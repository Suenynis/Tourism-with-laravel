<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\comment;
use Illuminate\Support\Facades\Hash;

class commentController extends Controller
{
    public function saveComment(Request $request){
        $request->validate([
            'UserId'=>'required',
            'comment'=>'required',
        ]);
        $comment = new comment();
        $comment -> UserId = '';
        $comment -> comment = $request -> comment;
        $comment->save();
        return redirect()->back()->withSuccess('Success');
    }
}
