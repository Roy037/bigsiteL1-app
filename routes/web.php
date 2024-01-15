<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CarsController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
Route::resource('cars', CarsController::class);




// Route::get('/products', [
//     ProductsController::class,
//     'index' //index funtion of productscontroller
// ])->name('products');

//chuyen trang so
// Route::get('/products/{id}', [
//     ProductsController::class,
//     'detail' //detail funtion of productscontroller
// ])

// chu
// Route::get('/products/{productsName}', [
//     ProductsController::class,
//     'detail1' //detail funtion of productscontroller
// ]);

//ca so va chu
Route::get('/products/{productsName}/{id}', [
    ProductsController::class,
    'detail2'
])->where([
    'productsName' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);








/*
//response a view
Route::get('/', function () {
    return view('home');
    // return env('MY_NAME');
});
//response a string
Route::get('/users', function () {

    return 'page user';
});
//response a array
Route::get('/ten', function () {

    return ['minh', 'roy', 'ten bla'];
});
//response 
Route::get('/info', function () {

    return response()->json([
        'name' => 'roy',
        'sdt' => '039488xxxx',
    ]);
});
//response another request = 'redirect'
//chuyen huong sang trang khac
Route::get('/chuyenhuong', function () {
    // return redirect('/info');
    return redirect('/ten');
});
*/