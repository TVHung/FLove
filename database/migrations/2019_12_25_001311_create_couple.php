<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouple extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id2');
            $table->integer('year')->nullable();
            $table->timestamps();
            $table->primary(['id','id2']);
            $table->foreign('id')->references('id')->on('account');
            $table->foreign('id2')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couple');
    }
}
