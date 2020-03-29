<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('full_name', 128);
            $table->string('email', 128)->unique();
            $table->string('password', 128);
            $table->string('location', 128);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('status')->default(1);
            $table->string('role')->default('user')->comment('admin, user, le');
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
}
