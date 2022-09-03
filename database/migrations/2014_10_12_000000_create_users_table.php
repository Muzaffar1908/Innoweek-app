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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable()->default('');
            $table->integer('gender')->unsigned()->nullable()->default(1);
            $table->date('birth_date')->nullable();
            $table->string('user_image')->nullable()->default('upload/config/default_user.png');
            $table->string('address')->nullable()->default('');
            $table->decimal('balance', 13, 2)->nullable()->default(00.00);
            $table->string('email')->nullable()->unique();
            $table->string('phone', 15)->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('provider_name')->nullable()->default('');
            $table->integer('provider_id')->unsigned()->nullable()->default(0);
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_blocked')->nullable()->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
