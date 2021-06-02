<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return View::make('register');
    }
}
