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

Route::group(
    ['prefix' => 'book'],
    function () {
        Route::get('index', 'BookController@index')->name('book.index');
        Route::get('add', 'BookController@add')->name('book.add');
        Route::post('add-store', 'BookController@addStore')->name('book.add.store');
        Route::get('edit/{id}', 'BookController@edit')->name('book.edit');
        Route::post('edit-store/{id}', 'BookController@editStore')->name('book.edit.store');
        Route::post('delete/{id}', 'BookController@delete')->name('book.delete');
        Route::post('search/', 'BookController@search')->name('book.search');
    }
);

Route::get('/', function () {
	$data['books'] = [
		[
		'title' => 'Judul',
        'description' => 'Deskripsi',
        'category' => 'Kategori',
        'keyword' => 'Keyword',
        'price' => 'Harga',
        'stock' => 'Stok',
        'publisher' => 'penerbit',
    	]
	];
    return view('welcome', $data);
});
