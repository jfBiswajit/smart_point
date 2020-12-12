<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('logs', function (Blueprint $table) {
      $table->id();
      $table->string('account_number');
      $table->integer('payment_gateway');
      $table->integer('service_type');
      $table->string('duration');
      $table->integer('amount');
      $table->string('name');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('logs');
  }
}
