<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absubmits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->default(2);
            $table->string('title');
            $table->string('typeofsubmit');
            $table->string('theme');
            $table->string('fullabstract')->default('nofile.doc');
            $table->string('abstractnoauthor')->default('nofile.doc');
            $table->string('eposter')->default('nofile.doc');
            $table->string('author');
            $table->string('tp');
            $table->string('email');
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
        Schema::dropIfExists('absubmits');
    }
}
