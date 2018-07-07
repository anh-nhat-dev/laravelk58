<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-product', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')
                ->references('user_id')
                ->on('user');
            $table->integer('prod_id')->nullable()->unsigned();
            $table->foreign('prod_id')
                ->references('prod_id')
                ->on('product');
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
        Schema::dropIfExists('user-product');
    }
}
