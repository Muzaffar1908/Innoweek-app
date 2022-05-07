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
        Schema::create('cources_rus', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id');
            $table->string('ins_id');
            $table->string('name');
            $table->string('uroven');
            $table->string('narx');
            $table->string('eski_narx');
            $table->string('lenght');
            $table->string('lang');
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
        Schema::dropIfExists('cources_rus');
    }
};
