<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumableItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumable_items', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('item_name')->nullable();
            $table->string('specification')->nullable();
            $table->string('bal_per_register')->nullable();
            $table->string('page_no')->nullable();
            $table->string('phy_found')->nullable();
            $table->string('short_item')->nullable();
            $table->string('excess_item')->nullable();
            $table->string('remark')->nullable();
            $table->date('batch')->nullable();
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
        Schema::dropIfExists('consumable_items');
    }
}
