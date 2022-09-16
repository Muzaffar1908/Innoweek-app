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
        Schema::create('innoweeks', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone', 15)->unique();
            $table->longText('description_en')->nullable();
            $table->longText('description_ru')->nullable();
            $table->longText('description_uz');
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->longText('you_tube')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
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
        Schema::dropIfExists('innoweeks');
    }
};
