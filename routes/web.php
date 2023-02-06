<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addcatform', function () {
    return view('addcatform');
});
Route::get('/form', [productcontroller::class, 'form']);
Route::get('/products', [productcontroller::class, 'getproducts']);
Route::get('/catproduct/{id}', [productcontroller::class, 'getcatprod']);
Route::post('/add', [productcontroller::class, 'addproduct']);
Route::post('/addcat', [productcontroller::class, 'addcategory']);
Route::get('deleteproduct/{id}', [productcontroller::class, 'deleteproduct']);
Route::get('deletecategory/{id}', [productcontroller::class, 'deletecategory']);
Route::get('editproduct/{id}', [productcontroller::class, 'editproduct']);
Route::post('updateproduct/{id}', [productcontroller::class, 'updateproduct']);
Route::get('editcategory/{id}', [productcontroller::class, 'editcategory']);
Route::post('updatecategory/{id}', [productcontroller::class, 'updatecategory']);
