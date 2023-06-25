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
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday')->nullable();
            $table->string('gender');
            $table->string('address')->nullable();
            /* $table->string('number_of_service')->unique(); */
            $table->string('type');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            /* $table->unsignedBigInteger('region_id'); */
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           /*  $table->foreign('region_id')->references('id')->on('regions')->onDelete; */
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
