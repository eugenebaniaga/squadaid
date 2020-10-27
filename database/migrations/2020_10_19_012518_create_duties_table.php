<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDutiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duties', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('duty_date',0);
            $table->string('description');
            $table->string('title');
            $table->string('place');
            $table->string('pullout_by');
            $table->string('type');

            // $table->unsignedBigInteger('personnel_id');
            $table->foreignId('personnel_id')->constrained('personnels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duties');
    }
}
