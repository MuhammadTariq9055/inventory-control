<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermanentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanent_items', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->date('dop');
            $table->string('equipment');
            $table->string('specification');
            $table->string('qty');
            $table->string('stock_reg');
            $table->string('p_no');
            $table->string('dept_p_no');
            $table->string('department');
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
        Schema::dropIfExists('permanent_items');
    }
}
