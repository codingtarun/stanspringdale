<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.welcome');
    }
    public function menu()
    {
        return view('index.menu');
    }
}
