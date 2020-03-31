<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name',50);
            $table->string('address',50);
            $table->string('state',50);
            $table->string('sex',10);
            $table->float('height');
            $table->float('weight');
            $table->date('date');
            $table->integer('age');
            $table->string('phonenumber',10);
            $table->string('email',50);
            $table->string('facebook',100);
            $table->string('hobby',100)->nullable();
            $table->string('weekness',100)->nullable();
            $table->string('avatar',100)->nullable();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('id')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infor');
    }
}
