<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('status',['waiting','preparation','ready','delivered'])
        ->default('waiting');
            $table->float('total');
            $table->integer('item_count');
            $table->boolean('is_paid')->default(false);
            $table->enum('consume_location', ['take-away', 'in_shop'])->default('take-away');
            $table->string('description')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('option', ['skim', 'semi', 'whole', 'small', 'medium', 'large', 'single',
             'double', 'triple', 'chocolate_chip', 'ginger'])->nullable();
            $table->decimal('price');
            $table->timestamps();
        });
        
        Schema::create('order_product', function (Blueprint $table) {
            $table->foreignId('order_id')->index();
            $table->foreignId('product_id')->index();

            $table->primary(['order_id', 'product_id']);

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->integer('quantity')->default(1);
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('order_product');
    }
}
