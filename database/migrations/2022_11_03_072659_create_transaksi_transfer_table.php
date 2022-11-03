<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_transfer', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->string('kode_digit')->unique();
            $table->string('no_rekening_pengirim');
            $table->string('nama_rekening_pengirim');
            $table->string('no_rekening_tujuan');
            $table->string('nama_rekening_tujuan');
            $table->string('no_rekening_perantara');
            $table->string('nama_rekening_perantara');
            $table->string('bank_tujuan');
            $table->string('bank_perantara');
            $table->string('bank_pengirim');
            $table->integer('nominal_transfer');
            $table->integer('biaya_admin');
            $table->integer('total_transfer');
            $table->date('berlaku_tanggal');
            $table->time('berlaku_jam', $precision = 0);
            $table->date('transaksi_tanggal');
            $table->time('transaksi_jam', $precision = 0);
            $table->enum('status', ['pending', 'success','failed'])->default('pending');
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
        Schema::dropIfExists('transaksi_transfer');
    }
}
