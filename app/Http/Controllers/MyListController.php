<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class MyListController extends Controller
{
    public function index(){
        return View::make('mylist');
    }
}
