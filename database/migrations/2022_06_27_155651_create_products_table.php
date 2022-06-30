<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->bigInteger('price');
            $table->bigInteger('offer_price')->nullable();
            $table->bigInteger('disscount')->nullable();
            $table->integer('quantity');
            $table->text('content');
            $table->decimal('ratings')->nullable();
            $table->text('configuration');
            $table->enum('status', [0, 1]);
            $table->enum('condition', [0, 1]);
            $table->enum('deleted', [0, 1]);

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
        Schema::dropIfExists('products');
    }
}
