<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CalismaSaat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calisma_saat', function (Blueprint $table) {
            $table->id();
            $table->time('haftaici_baslangic');
            $table->time('haftaici_bitis');
            $table->time('cumartesi_baslangic');
            $table->time('cumartesi_bitis');
            $table->time('pazar_baslangic');
            $table->time('pazar_bitis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calisma_saat');
    }
}
