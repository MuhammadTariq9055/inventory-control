<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumableStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumable__stocks', function (Blueprint $table) {
            $table->id();
            $table->date('month');
            $table->string('particular');
            $table->integer('bill_no');
            $table->integer('receipt');
            $table->integer('issued');
            $table->integer('balance');
            $table->string('remark');
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
        Schema::dropIfExists('consumable__stocks');
    }
}
