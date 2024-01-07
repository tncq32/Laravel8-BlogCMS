<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('merchant_id')->nullable();
            $table->string('title');
            $table->string('front_image')->nullable();
            $table->string('description');
            $table->integer('rank')->nullable();
            $table->enum('status', ['active', 'passive'])->default('active')->comment('if status is passive = merchant all event false');

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
        Schema::dropIfExists('blog_categories');
    }
}
