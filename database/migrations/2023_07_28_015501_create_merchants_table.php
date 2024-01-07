<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('picture')->nullable();
            $table->string('slug')->unique();
            $table->string('code')->nullable();
            $table->tinyInteger('max_users')->default(10);
            $table->json('langs')->nullable();
            $table->enum('verification_2FA', ['active', 'passive'])->default('passive');
            $table->enum('status', ['active', 'passive'])->default('active')->comment('if status is passive = merchant all event false');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['slug']);
            $table->index(['code']);
            $table->index(['name']);
        });

        DB::table('merchants')->insert(
            array(
                'name' => 'Piemsoft',
                'picture' => '/storage/images/lJVhZsGFOMqneE6XBEhCcZ8IqEZDObfWax8OJsWf.png',
                'slug' => 'piemsoft',
                'max_users' => 10,
                'verification_2FA' => 'passive',
                'langs' => json_encode(array('tr', 'en')),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}
