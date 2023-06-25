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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('date');
            $table->string('price');
            $table->string('dsecription');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            /* $table->srting('');
            $table->srting(''); */
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('car__companies')->onDelete;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
