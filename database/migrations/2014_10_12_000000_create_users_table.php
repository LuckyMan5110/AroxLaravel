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
            $table->string('name')->nullable()->comment('company:company name, person:fullname');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('user_type')->nullable()->comment('my comment');
            $table->tinyInteger('state')->default(1)->comment('1:non-verified user 2:verified-user 3:guest');
            $table->string('alias')->nullable()->comment('niqe id with at least 12 numbers');
            $table->string('image_person')->nullable()->comment('imageurl for person');
            $table->string('image_business')->nullable()->comment('imageurl for business');
            $table->timestamp('invited_at')->nullable();
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
