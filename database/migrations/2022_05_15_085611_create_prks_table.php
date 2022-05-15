<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prk_number');
            $table->integer('lot')->nullable();
            $table->integer('priority')->default(0);
            $table->integer('basket')->default(1);
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
        Schema::dropIfExists('prks');
    }
}
