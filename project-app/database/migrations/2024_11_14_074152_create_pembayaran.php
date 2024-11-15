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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembayaran');
            $table->decimal('jumlah', 10, 2);
            $table->unsignedBigInteger('siswa_id');
            $table->boolean('status_pembayaran');
            $table->decimal('total', 10, 2);

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
        Schema::dropIfExists('pembayaran');
    }
};
