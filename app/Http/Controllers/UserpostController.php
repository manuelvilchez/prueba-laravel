<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserpostController extends Controller
{
    public function index(){

        return view('userpost.index');

    }
}
