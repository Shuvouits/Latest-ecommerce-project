<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartinformations', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('product_title')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('total_price')->nullable();
            $table->string('transaction_id')->nullable();
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
        Schema::dropIfExists('cartinformations');
    }
}
