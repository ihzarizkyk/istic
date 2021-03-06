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
            $table->foreignId("user_id")->nullable();
            $table->string("name",100);
            $table->integer("price");
            $table->integer("quantity");
            $table->string("jenis_pengiriman",40);
            $table->string("pengirim",50);
            $table->string("penerima",50);
            $table->string("kota_asal",50);
            $table->string("kota_tujuan",50);
            $table->integer("biaya_kirim");
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
