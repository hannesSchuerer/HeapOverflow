<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\User;

class userController extends Controller
{
    public function store()
    {

        $validator = Validator::make(request()->all(),[
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        if($validator->fails()){
            return redirect('/createUser')->withErrors($validator);
        }

        $user = new User;
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('/login');
    }

    public function index()
    {
        return view('/createUser');
    }

    public function login()
    {
        return view('/login');
    }
}
