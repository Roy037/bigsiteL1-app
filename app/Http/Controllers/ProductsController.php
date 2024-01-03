<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  ProductsController extends Controller
{
    public function index(Request $request)
    {
        //case1 
        $title = 'roy';
        $age = 20;
        // return view('products.index',compact('title','age'));

        //case2 
        //dung with,chi truyen 1 parameter(tham so)
        $name = 'roy';
        // return view('products.index')->with('name', $name); //key and values

        //case3
        $exp = [
            'year' => 2,
            'program' => 'py,java,c,php'
        ];
        // return view('products.index',compact('exp'));

        //case4
        $exp1 = [
            'year' => 2,
            'program' => 'py,java,c,php',
            'goodjob' => true
        ];
        // return view('products.index',[
        //     'exp1' => $exp1
        // ]);
        print_r(route('products'));
        return view ('products.index');


    }
    public function about()
    {
        // return 'page about';
    }
    public function detail($id)
    {

        // return view('products.index',[
        //     'products' =>[
        //         'info'=> 'roy',
        //         'year' => 20
        //     ]
        // ]);

    }
    public function detail1($productsName)
    {
        $game = [
            'gta5' => 'gta5',
            'gta6' => 'gta6'
        ];
        // return view('products.index', [
        //     //neu khong tim thay thi tra ve .?? la gia tri mat dinh
        //     'products' => $game[$productsName] ?? 'unknow game' 

        // ]);
    }
    public function detail2($productsName, $id)
    {
        // return "products name = " . $productsName .
        //     ",products id = " . $id;
    }
};
