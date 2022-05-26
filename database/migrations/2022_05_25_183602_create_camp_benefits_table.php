<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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

            // 1st Method
            $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedbigInteger('camp_id');

            // 2nd Method
            // $table->foreignId('camp_id')->constrained();
            $table->string('name', 100);            
            $table->timestamps();
            $table->softDeletes();

            // 1st method
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
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
