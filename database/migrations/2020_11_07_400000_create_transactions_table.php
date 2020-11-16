<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('Products_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('Jumlah_beli');
            $table->integer('total_harga');
            $table->date('tanggal_beli');
            $table->unsignedBigInteger('product_id');

            $table
                ->foreign('Products_id')
                ->references('id')
                ->on('products');
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
            $table
                ->foreign('product_id')
                ->references('id')
                ->on('products');

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
        Schema::dropIfExists('transactions');
    }
}
