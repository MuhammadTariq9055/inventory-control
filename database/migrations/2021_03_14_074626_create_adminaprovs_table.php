<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminaprovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminaprovs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_subject');
            $table->string('description');
            $table->integer('r_id');
            $table->string('budget_head');
            $table->string('budget_allocation');
            $table->string('deputy_remark');
            $table->string('director_coment');
            $table->date('date');
            $table->integer('status');
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
        Schema::dropIfExists('adminaprovs');
    }
}
