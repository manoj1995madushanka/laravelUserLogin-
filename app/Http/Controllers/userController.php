<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $name='manoj';
        return view ('users',compact('name'));
    }
}
