<?php

use App\Models\Button;
use App\Models\Test;
use App\Models\Transaction;
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

Route::get('/piUI', function () {
    return view('/UserLayouts/piUI');
});
Route::get('/waterCounter', function () {
    return view('/UserLayouts/waterCounter');
});


Route::get('/show_data', function () {
  return view('live');
});

Route::get('/payment/{id}', function ($id) {

  return view('UserLayouts.payment', compact('id'));
});

Route::get('/paymentAuth', function (Request $request) {

  $formData = [
    'name' => $request->name,
    'duration' => $request->duration,
    'payment_method' => $request->payment_method,
    'service_type' => $request->id
  ];

  $request->session()->put('formData', json_encode($formData));

  $paymentMethod = $request->payment_method;

  return view('UserLayouts.paymentAuth', compact('paymentMethod'));
});


Route::get('/counter', function (Request $request) {
  $formData = json_decode($request->session()->get('formData'));

  if ($formData) {
    $formData->account_number = $request->account_number;
    $transaction = new Transaction();
    $transaction->account_number = $formData->account_number;
    $transaction->payment_gateway = $formData->payment_method;
    $transaction->service_type = $formData->service_type;
    $transaction->duration = $formData->duration;
    $transaction->name = $formData->name;
    $transaction->save();
    $request->session()->forget('formData');
  }

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
