<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = ['tanggal_pembayaran', 'jumlah', 'siswa_id', 'status_pembayaran', 'total'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
