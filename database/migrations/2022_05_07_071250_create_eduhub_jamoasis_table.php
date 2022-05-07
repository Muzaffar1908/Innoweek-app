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
        Schema::create('eduhub_jamoasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uroven');
            $table->string('img');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('telegram');
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
        Schema::dropIfExists('eduhub_jamoasis');
    }
};
