<?php

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

Route::get('/', function() {
    return "Respon ini diterima dari path / dengan metode GET";
});

Route::get('/books', function(Request $request) {
    return "Router ini nantinya akan digunakan untuk mengambil semua data buku. Closure method pada router ini juga menerima satu parameter yaitu $request yang digunakan untuk menampung query paramater";
});

Route::post('/books', function() {
    return "Router ini nantinya akan digunakan untuk mencipatakan data buku yang baru";
});

Route::get('/books/{id}', function($id) {
    return "Router ini nantinya akan digunakan untuk mengambil satu data buku dengan id=" . $id;
});

Route::put('/books/{id}', function($id) {
    return "Router ini nantinya akan digunakan untuk mengubah data buku dengan id=" . $id;
});

Route::delete('/books/{id}', function($id) {
    return "Router ini nantinya digunakan untuk menghapus data buku dengan id=" . $id;
});
