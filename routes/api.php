<?php

use App\Models\BatteryStatus;
use App\Models\Button;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/send_data', function (Request $request) {
  $batteryStatus = new BatteryStatus();
  $batteryStatus->label = $request->data;
  $batteryStatus->save();

  // $latestButtonState = Button::latest()->first();

  // $response = $latestButtonState->red . ',' . $latestButtonState->yellow . ',' . $latestButtonState->green;
  // return $response;
});
