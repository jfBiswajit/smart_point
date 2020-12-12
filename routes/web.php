<?php

use App\Models\Button;
use App\Models\Test;
use App\Models\Transaction;
use Carbon\Carbon;
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

Route::get('/db', function () {
  return view('/db');
});
Route::post('/show_data', function () {
  return response()->json(Test::latest()->first());
});

Route::get('/piUI', function () {
  return view('/UserLayouts/piUI');
});
Route::get('/login', function () {
  return view('/login/login');
});
Route::get('/waterCounter', function (Request $request) {
  return view('/UserLayouts/waterCounter');
})->name('water');

Route::get('get_your_water', function (Request $request) {
  $formData = json_decode($request->session()->get('formData'));

  if ($formData) {
    $transaction = new Transaction();
    $transaction->account_number = $formData->account_number;
    $transaction->payment_gateway = $formData->payment_method;
    $transaction->service_type = $formData->service_type;
    $transaction->duration = $formData->duration ?? 0;
    $transaction->name = $formData->name;
    $transaction->save();
    $counter = Carbon::now()->addSecond($transaction->duration);
    $request->session()->forget('formData');
    return 'please get your water!';
  }

  return "Sorry! somethig went wrong!";
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

  $duration = $request->duration;
  $service = $request->id;
  $amount = 0;

  if ($service == 2) {
    if ($duration == 5) {
      $amount = 10;
    }

    if ($duration == 10) {
      $amount = 15;
    }

    if ($duration == 15) {
      $amount = 20;
    }
  }

  if ($service == 1) {
    if ($duration == 5) {
      $amount = 1;
    }

    if ($duration == 10) {
      $amount = 2;
    }

    if ($duration == 15) {
      $amount = 3;
    }
  }

  if ($service == 3) {
    $amount = 1;
  }


  return view('UserLayouts.paymentAuth', compact('paymentMethod', 'amount'));
});


Route::get('/counter', function (Request $request) {
  $formData = json_decode($request->session()->get('formData'));

  if ($formData) {

    if ($formData->service_type == 3) {
      $formData->account_number = $request->account_number;
      $request->session()->put('formData', json_encode($formData));
      return redirect()->route('water');
    }

    $formData->account_number = $request->account_number;
    $request->session()->put('formData', json_encode($formData));
    $transaction = new Transaction();
    $transaction->account_number = $formData->account_number;
    $transaction->payment_gateway = $formData->payment_method;
    $transaction->service_type = $formData->service_type;
    $transaction->duration = $formData->duration ?? 0;
    $transaction->name = $formData->name;
    $transaction->save();
    $counter = Carbon::now()->addSecond($transaction->duration);

    $request->session()->forget('formData');
    return view('UserLayouts.Counter', compact('counter'));
  }

  return 'Sorry! Something went worng!';
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
