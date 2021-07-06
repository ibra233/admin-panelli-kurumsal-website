<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Urunler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->id('urun_id');
            $table->string('urun_ad');
            $table->text('urun_aciklama')->nullable();
            $table->string('urun_fiyat');
            $table->bigInteger('kategori')->unsigned();
            $table->foreign('kategori')->references('kategori_id')
            ->on('kategoriler')->onDelete('cascade');
            $table->text('resim');
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
        //
    }
}
