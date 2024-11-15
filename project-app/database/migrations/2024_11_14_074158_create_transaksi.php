<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembayaran');
            $table->unsignedBigInteger('siswa_id');
            $table->decimal('pemasukan', 10, 2);
            $table->decimal('pengeluaran', 10, 2);
            $table->decimal('jumlah', 10, 2);
            $table->string('keterangan');
            $table->string('catatan');

            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi');
    }
};
