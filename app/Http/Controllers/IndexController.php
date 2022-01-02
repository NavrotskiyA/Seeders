<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return '<h1>Hello, I\'m index controller</h1>
                <span><a href='.route('user.reg').'>Sing Up</a></span>&nbsp;
                <span><a href='.route('user.auth').'>Sing In</a></span>';
    }
}
