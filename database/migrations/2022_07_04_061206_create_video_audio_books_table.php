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
        Schema::create('video_audio_books', function (Blueprint $table) {
            $table->id();
            $table->string('cours_id');
            $table->string('tip');
            $table->string('dars_turi');
            $table->string('uroven');
            $table->string('name');
            $table->text('v_name');
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
        Schema::dropIfExists('video_audio_books');
    }
};
