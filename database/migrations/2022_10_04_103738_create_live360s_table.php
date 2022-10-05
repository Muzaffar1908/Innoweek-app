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
        Schema::create('live360s', function (Blueprint $table) {
            $table->id();
            $table->string('youtobe_id_1')->index();
            $table->string('youtobe_id_2')->nullable();
            $table->string('youtobe_id_3')->nullable();
            $table->string('youtobe_id_4')->nullable();
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
        Schema::dropIfExists('live360s');
    }
};
