<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        //query builders lay ra bang ghi
        // $posts = DB::select(
        //     "SELECT * FROM posts WHERE id = :id;",
        //     ['id' => 2]
        // ); case 2

        // $posts = DB::table("posts")
        //     ->where("id", 4)
        //     ->select('body')
        //     ->get();


        $posts = DB::table("posts")

            //bat cmd mysql u- root -p -> use bigsiteapp -> SELECT * FROM posts; de hien thi bang vua cap nhat

            // ->insert([
            //     'title' => 'bigsite',
            //     'body' => 'khoi nghiep'
            // ]);

            ->where('id', '=', 5)
            //update

            // ->update([
            //     'title' => 'bigsite',
            //     'body' => 'da khoi nghiep'
            // ]);

            //delete 
            ->delete();

        // ->avg('id')
        // ->sum('id')
        // ->max('id');
        // ->min('id')
        //dem bao nhieu bang ghi
        // ->count();
        //tim theo id
        // ->find(2);
        //bang ghi co gia tri khac null
        // ->whereNotNull("body")
        // bang ghi time cu~ nhat
        // ->oldest() ;
        // ->where("created_at", ">", now()->subDay())
        //sap xep theo dieu kien
        // ->whereBetween("id",[3,4])
        //sap xep theo thu tu tang dan 
        // ->orderBy('id','asc')      
        //bang ghi dau tien   
        // ->first()  ; 
        // ->get();


        dd($posts);
        // return view('posts.index');
    }
}
