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
            $table->string('name');
            $table->ineteger('user_id');
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->integer('discount')->nullable();
            $table->longText('image')->nullable();
            $table->longText('detail');
            $table->string('code');
            $table->dateTime('valid_till');
            $table->integer('status')->nullable();
            $table->string('mile1')->nullable();
            $table->longText('zip1')->nullable();
            $table->string('mile2')->nullable();
            $table->longText('zip2')->nullable();
            $table->string('mile3')->nullable();
            $table->longText('zip3')->nullable();
            $table->string('category')->nullable();
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
