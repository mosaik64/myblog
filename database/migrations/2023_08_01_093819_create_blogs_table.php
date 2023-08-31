<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 1000);
            $table->string('picture0')->nullable();
            $table->string('picture_description0', 200)->nullable();
            $table->string('picture1')->nullable();
            $table->string('picture_description1', 200)->nullable();
            $table->string('picture2')->nullable();
            $table->string('picture_description2', 200)->nullable();
            $table->string('picture3')->nullable();
            $table->string('picture_description3', 200)->nullable();
            $table->string('picture4')->nullable();
            $table->string('picture_description4', 200)->nullable();
            $table->string('picture5')->nullable();
            $table->string('picture_description5', 200)->nullable();
            $table->string('picture6')->nullable();
            $table->string('picture_description6', 200)->nullable();
            $table->string('picture7')->nullable();
            $table->string('picture_description7', 200)->nullable();
            $table->string('picture8')->nullable();
            $table->string('picture_description8', 200)->nullable();
            $table->string('picture9')->nullable();
            $table->string('picture_description9', 200)->nullable();
            $table->boolean('visible')->default(true);
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
};
