<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialaprovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financialaprovs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fsubject');
            $table->string('description');
            $table->integer('aid');
            $table->integer('rate');
            $table->string('deputy_coment');
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
        Schema::dropIfExists('financialaprovs');
    }
}
