<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_car', function (Blueprint $table) {
            $table->id();
            $table->date('day_recieve');  // hour work start at
            $table->integer('days');    // hour work end at
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('car_id')
                ->references('id')
                ->on('cars')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_car');
    }
}
