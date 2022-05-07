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
        Schema::create('eduhub_steps_rus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->string('link_youtube');
            $table->string('title1');
            $table->text('text1');
            $table->string('title2');
            $table->text('text2');
            $table->string('title3');
            $table->text('text3');
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
        Schema::dropIfExists('eduhub_steps_rus');
    }
};
