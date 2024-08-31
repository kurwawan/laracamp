<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // todo: 1st method --start
            // $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');

            // todo: 2nd method --start
            $table->foreignId('camp_id')->constrained();
            // todo: 2nd method --end

            $table->string('name');
            $table->timestamps();

            // todo: 1st method --end
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
