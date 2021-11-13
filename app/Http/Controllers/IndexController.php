<?php

namespace App\Http\Controllers;
use Auth;

class IndexController extends Controller
{
    public function indexview () {
        $_SESSION['user']=Auth::user()->name ?? '';
        return view('home');
    }
}
