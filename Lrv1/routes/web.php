<?php

use Illuminate\Support\Facades\Route;

// ke home page
Route::get('/', function () {
    echo "halo nama saya dewwi";
    // return view('welcome');
});

// route ke halaman alamat
Route::get('/alamat', function () {
    echo "Myeongdong street ";
});

// route ke halaman path1/path2/detail
Route::get('/path1/path2/detail', function () {
    echo "Myeongdong street ";
});

//dinamis dgn ada parameter
Route::get('/user/{id}/{name}', function ($id, $name) {
});

// post
Route::post('/user/{id}/{name}', function ($id, $name) {
});

// put dan patch utk edit
// delete utk hapus


// menampilkan halaman profile
Route::get('/profile', function () {
    return view('profile');
});