<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippetController extends Controller
{
    //
    public function index(){
        return view("snippetView");
    }
}
