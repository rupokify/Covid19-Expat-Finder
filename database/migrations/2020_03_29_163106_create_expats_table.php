<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('full_name', 128);
            $table->string('mobile_number', 24)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('location')->index();
            $table->string('location_house', 32)->nullable();
            $table->string('location_road', 32)->nullable();
            $table->string('location_area', 128)->nullable();
            $table->string('location_postal_code', 16)->nullable();
            $table->string('gender', 16)->nullable()->index();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('country', 32)->nullable();
            $table->date('date_of_arrival')->nullable();
            $table->boolean('quarantine_status')->default(0)->index();
            $table->string('case_status')->nullable();
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
        Schema::dropIfExists('expats');
    }
}
