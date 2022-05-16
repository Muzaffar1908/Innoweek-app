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
        Schema::create('eduhubs', function (Blueprint $table) {
            $table->id();
            $table->string('tell');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('telegram');
            $table->string('you_tube');
            $table->string('instagram');
            $table->string('google_play');
            $table->string('app_story');
            $table->string('adress');
            $table->string('office_open');
            $table->string('office_close');
            $table->string('awards_count');
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
        Schema::dropIfExists('eduhubs');
    }
};
