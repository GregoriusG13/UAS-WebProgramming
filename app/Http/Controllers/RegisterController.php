<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function TryRegis(Request $request)
    {

        $account = Account::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'role_id' => $request->role,
            'gender_id' => $request->gender,
            'password' => Hash::make($request->password),
        ]);

   
        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }
}
