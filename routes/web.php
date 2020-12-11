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
Route::get('/payment/{id}', function () {

    return view('UserLayouts.payment');
});

Route::get('/paymentAuth', function (Request $request) {
    $formOneData = ['name' => $request->name, 'duration' => $request->duration, 'payment_method' => $request->payment_method];
    // dd($formOneData);
    $paymentMethod = $request->payment_method;
    return view('UserLayouts.paymentAuth', compact('paymentMethod'));
});
Route::get('/paymentRocket', function () {
    return view('UserLayouts.paymentRocket');
});

Route::get('/paymentNogod', function () {
    return view('UserLayouts.paymentNogod');
});
Route::get('/counter', function () {
    return view('UserLayouts.Counter');
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
