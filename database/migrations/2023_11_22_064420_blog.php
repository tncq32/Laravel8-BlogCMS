<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('blogs', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('merchant_id')->nullable();
        $table->unsignedBigInteger('category_id')->nullable();
        $table->string('blog_small_title')->nullable();
        $table->string('blog_title');
        $table->string('blog_description');
        $table->string('yazar_id')->nullable();
        $table->string('blog_small_description')->nullable();
        $table->string('blog_front_image')->nullable();
        $table->enum('blog_sidebar', ['left', 'right','center'])->default('center');

        $table->integer('blog_rank')->nullable();
        $table->enum('blog_status', ['active', 'passive'])->default('active')->comment('if status is passive = merchant all event false');
        $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');


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
    Schema::dropIfExists('blogs');
}
}
