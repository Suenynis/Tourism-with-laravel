<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public  function show(){
        return view('pages.registration');
    }

    public function savedata(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'phone' => ['required', 'min:10'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);


        //$formFields['password'] = bcrypt($formFields['password']);

        $user = User::create([
         'name' => $formFields['name'],
            'phone' => $formFields['phone'],
            'email' => $formFields['email'],
            'password' => $formFields['password']
        ]);


        if ($user) {
            auth()->login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => "Произошло ошибка"
        ]);
    }


}


