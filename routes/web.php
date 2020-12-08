<?php

use App\Models\Test;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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

Route::get('/', function() {
  return view('welcome');
});

// Route::post('/show_data', function () {
//   return response()->json(Test::latest()->first());
// });

Route::post('/store_button_data', function () {
  return response()->json(Test::latest()->first());
});
