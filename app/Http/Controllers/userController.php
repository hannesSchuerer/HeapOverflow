<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function store()
    {
        return view('/createUser');
    }

    public function login()
    {
        return view('/login');
    }
}
