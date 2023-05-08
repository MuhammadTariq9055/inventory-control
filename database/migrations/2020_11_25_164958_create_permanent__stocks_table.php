<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermanentStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanent__stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->String('discription');
            $table->integer('qty');
            $table->String('unit_rate');
            $table->String('total');
            $table->String('gst');
            $table->String('grand_total');
            $table->String('supplier_name');
            $table->String('bill_no');
            $table->integer('pg_no');
            $table->date('issu_date');
            $table->integer('qty_issu');
            $table->String('name_req_deptt');
            $table->integer('bal_after_issue');
            $table->integer('deptt_pg_no');
            $table->String('folio');
            $table->String('remark');
            $table->String('auction');
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
        Schema::dropIfExists('permanent__stocks');
    }
}
