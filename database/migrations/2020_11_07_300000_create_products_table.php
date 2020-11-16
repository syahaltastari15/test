<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('distributor_id');
            $table->date('tanggal_masuk');
            $table->integer('harga_barang');
            $table->integer('stok_barang');
            $table->text('keterangan');

            $table
                ->foreign('type_id')
                ->references('id')
                ->on('types');
            $table
                ->foreign('distributor_id')
                ->references('id')
                ->on('distributors');

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
