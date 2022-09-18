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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('archive_id')->constrained('archives')->onDelete('restrict');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('stoped_at')->nullable();
            $table->string('title_uz');
            $table->string('title_ru')->nullable()->default('');
            $table->string('title_en')->nullable()->default('');
            $table->string('live_url');
            $table->string('innoweek_video')->nullable();
            $table->string('user_image')->nullable()->default('upload/config/conference.png');
            $table->longText('description_en')->nullable();
            $table->longText('description_ru')->nullable();
            $table->longText('description_uz')->nullable();
            $table->string('address', 255)->nullable();
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
        Schema::dropIfExists('conferences');
    }
};
