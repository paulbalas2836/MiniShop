<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    return View::make('login');
    }
}
