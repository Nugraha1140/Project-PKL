<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $fillable = ['id_costumer', 'id_barang', 'jumlah', 'total', 'tgl_transaksi'];
    public $timestamp = true;

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_costumer');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
