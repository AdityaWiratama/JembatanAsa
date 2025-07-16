<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonasiUang extends Model
{
    protected $table = 'donasi_uang';

    protected $fillable = [
        'program_donasi_id',
        'nama_lengkap',
        'kontak',
        'nominal',
        'metode_pembayaran',
        'catatan_tambahan',
    ];

    public function program()
    {
        return $this->belongsTo(ProgramDonasi::class, 'program_donasi_id');
    }
}
