<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256)->nullable();
            $table->date('date_of_employment')->nullable();
            $table->char('phone',9)->nullable();
            $table->string('email','320')->nullable();
            $table->integer('salary')->nullable();
            $table->string('photo')->nullable();
            $table->BigInteger('position_id')->unsigned()->nullable();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->integer('head_id')->nullable()->nullable();
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
        Schema::dropIfExists('employees');
    }
}
