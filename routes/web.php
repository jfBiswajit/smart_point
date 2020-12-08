<?php

use App\Models\Button;
use App\Models\Test;
use Illuminate\Http\Request;
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

Route::get('/', function () {
  return view('welcome');
});

Route::post('/show_data', function () {
  return response()->json(Test::latest()->first());
});

Route::get('/show_data', function () {
  return view('live');
});

Route::post('/store_button_data', function (Request $request) {
  $button = new Button();
  $button->red = $request->red;
  $button->yellow = $request->yellow;
  $button->green = $request->green;
  $button->save();


  $latestButtonState = Button::latest()->first();

  return response()->json($latestButtonState->red, $latestButtonState->yellow, $latestButtonState->green);
});
