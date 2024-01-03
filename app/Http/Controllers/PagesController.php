<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function about(Request $request)
    {
        $name = "roy";
        $names = array('roy1','roy2','roy3');
        // $names = [];
        // return view('about')->with('name',$name);
        return view('about')->with('names',$names);
    }
}
