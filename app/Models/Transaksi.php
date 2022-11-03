<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi_transfer';
    protected $fillable = [
        'kode_transaksi', 'kode_digit', 'no_rekening_pengirim','nama_rekening_pengirim','no_rekening_tujuan','nama_rekening_tujuan','no_rekening_perantara','nama_rekening_perantara','bank_tujuan','bank_perantara','bank_pengirim','nominal_transfer','biaya_admin','total_transfer','berlaku_tanggal','berlaku_jam','transaksi_tanggal','transaksi_jam','status'
    ];
}
