<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');
            $table->integer('tour_price');
            $table->longText('tour_address');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('tour_review')->nullable();
            $table->string('tour_discount');
            $table->text('tour_details');
            $table->string('tour_image');
            $table->unsignedbiginteger('user_id')->nullable();
            $table->unsignedbiginteger('tour_guide_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('tour_guide_id')
                ->references('id')
                ->on('guides')
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
        Schema::dropIfExists('tours');
    }
}
