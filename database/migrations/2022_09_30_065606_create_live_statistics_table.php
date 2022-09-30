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
        Schema::create('live_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('titlenumber_1');
            $table->string('titlenumber_2')->nullable();
            $table->string('titlenumber_3')->nullable();
            $table->string('countryname_1');
            $table->string('countryname_2')->nullable();
            $table->string('countryname_3')->nullable();
            $table->string('countryname_4')->nullable();
            $table->string('countryname_5')->nullable();
            $table->string('countryname_all')->nullable();
            $table->string('countryson_1');
            $table->string('countryson_2')->nullable();
            $table->string('countryson_3')->nullable();
            $table->string('countryson_4')->nullable();
            $table->string('countryson_5')->nullable();
            $table->string('countryson_all')->nullable();
            $table->string('titlenumber_4')->nullable();
            $table->string('titlenumber_5')->nullable();
            $table->string('titlenumber_6')->nullable();
            $table->string('forum_1');
            $table->string('forum_2')->nullable();
            $table->string('forum_3')->nullable();
            $table->string('yarmarka_1');
            $table->string('yarmarka_2')->nullable();
            $table->string('yarmarka_3')->nullable();
            $table->string('is_active')->nullable()->default(true);
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
        Schema::dropIfExists('live_statistics');
    }
};
