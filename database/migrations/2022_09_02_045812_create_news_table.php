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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('cat_id')->constrained('news_categories')->onDelete('restrict');
            $table->string('title_uz');
            $table->string('title_ru')->nullable()->default('');
            $table->string('title_en')->nullable()->default('');
            $table->string('user_image')->nullable()->default('upload/config/news_example.png');
            $table->longText('description_en')->nullable();
            $table->longText('description_ru')->nullable();
            $table->longText('description_uz')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->string('tags', 255)->nullable()->default('inno, news');
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
        Schema::dropIfExists('news');
    }
};
