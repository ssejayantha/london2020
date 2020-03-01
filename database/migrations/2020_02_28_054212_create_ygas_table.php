<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ygas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('user_id')->default(2);
            $table->string('fname');
            $table->string('dob');
            $table->string('qualifications');
            $table->string('workplace');
            $table->string('preworkplace');
            $table->string('mnumber');
            $table->string('phone');
            $table->string('email');
            $table->string('title');
            $table->string('theme');
            $table->string('pptfile');
            $table->string('cv');

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
        Schema::dropIfExists('ygas');
    }
}
