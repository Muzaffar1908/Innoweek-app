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
            $table->text('facebook');
            $table->text('telegram');
            $table->text('you_tube');
            $table->text('instagram');
            $table->text('google_play');
            $table->text('app_story');
            $table->text('adress');
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
