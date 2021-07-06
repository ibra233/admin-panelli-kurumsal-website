<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rezervasyonlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervasyonlar', function (Blueprint $table) {
            $table->id('rezervasyon_id');
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('telefon_no');
            $table->dateTime('rezervasyon_tarih');
            $table->integer('rezervasyon_durum');
            $table->text('mesaj')->nullable();
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
        Schema::dropIfExists('rezervasyonlar');
    }
}
