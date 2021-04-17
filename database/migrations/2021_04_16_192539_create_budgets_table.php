<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->integer('layer_thickness')->nullable();
            $table->integer('totally_bags_quantity')->nullable();
            $table->float('price')->nullable();
            $table->string('expiration_date')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('bag_id');
            $table->timestamps();
        });

        Schema::table('budgets', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('bag_id')->references('id')->on('bags')->onDelete('cascade')->onUpdate('no action');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
