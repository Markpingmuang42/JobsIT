<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            $table->string('Sto_group');
            $table->integer('numberJObs');
            $table->string('CompanyDetail');
            $table->string('Textpost');
            $table->string('property');
            $table->string('welfare');
            $table->string('address');
            $table->string('contact');
            $table->string('logoCompany');
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
        Schema::dropIfExists('entrepreneurs');
    }
}
