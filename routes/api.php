<?php

use App\Models\BatteryStatus;
use App\Models\Button;
use App\Models\Test;
use App\Models\Transaction;
use Carbon\Carbon;
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

  // $batteryStatus = new BatteryStatus();
  // $batteryStatus->label = $request->data;
  // $batteryStatus->save();

  $transactions = Transaction::all();
  $indicatorData = [];
  $phone = 0;
  $ev = 0;
  $water = 0;

  foreach ($transactions as $transaction) {
    if ($transaction->service_type == 1) {
      $duration = $transaction->duration;
      $validTime = ($transaction->created_at)->addSecond($duration);
      $now = Carbon::now();

      if ($validTime >= $now) {
        $phone = 1;
      } else {
        $transaction->delete();
      }
    }

    if ($transaction->service_type == 2) {
      $duration = $transaction->duration;
      $validTime = ($transaction->created_at)->addSecond($duration);
      $now = Carbon::now();

      if ($validTime >= $now) {
        $ev = 1;
      } else {
        $transaction->delete();
      }
    }

    if ($transaction->service_type == 3) {
      $water = 1;
      $transaction->delete();
    }
  }

  $indicatorData = [$phone, $ev, $water];

  dd($indicatorData);
});
