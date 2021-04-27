<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tour', function (Blueprint $table) {
            $table->id();
            $table->date('book_date');
            $table->integer('persons');
            // $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // $table->foreign('tour_id')
            //     ->references('id')
            //     ->on('tours')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

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
        Schema::dropIfExists('book_tour');
    }
}
