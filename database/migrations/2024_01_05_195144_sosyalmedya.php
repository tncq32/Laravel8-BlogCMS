<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sosyalmedya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosyalmedya', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('behance')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('pinterest')->nullable();



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sosyalmedya');
    }

}
