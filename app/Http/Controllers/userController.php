<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function store()
    {
        $fusername = request('username');
        $femail = request('email');
        $fpassword = request('password');
        $fpasswordConfirm = request('passwordConfirm');

        if($fpassword == $fpasswordConfirm)
        {
            DB::table('users')->insert([
                ['username' => $fusername, 'email' => $femail, 'password' => $fpassword]
            ]);
        }
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
