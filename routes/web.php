<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});




Route::get('/order', function () {
    return view('/order', [
        "title" => "Order"
    ]);
});

Route::get('/product', function () {

    $blog_product = [
        [
            "title" => "Isi Product Pertama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus a voluptatem impedit perspiciatis labore tempore illum ipsam velit iste. Dignissimos deleniti quae vero nostrum et accusantium velit delectus sit voluptas."
        ]
    ];

    return view('product', [
        "title" => "Product",
        "product" => $blog_product
    ]);
});