<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['tanggal_pembayaran', 'siswa_id', 'pemasukan', 'pengeluaran', 'jumlah', 'keterangan', 'catatan'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
