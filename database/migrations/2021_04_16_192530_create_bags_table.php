<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('max_load_capacity')->nullable()->default('set null');
            $table->string('weight_unit_type')->nullable()->default('set null');
            $table->unsignedBigInteger('building_material_id');
            $table->timestamps();
        });

        Schema::table('bags', function(Blueprint $table){
            $table->foreign('building_material_id')->references('id')->on('building_materials')->onDelete('cascade')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bags');
    }
}
