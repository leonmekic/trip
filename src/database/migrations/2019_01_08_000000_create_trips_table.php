<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'trips',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->text('description');
                $table->date('time_from')->nullable();
                $table->date('time_to')->nullable();
                $table->string('price');
                $table->string('contact_email');
                $table->timestamps();
                $table->softDeletes();
            }
        );
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
