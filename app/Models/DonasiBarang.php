<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonasiBarang extends Model
{
    protected $table = 'donasi_barang';

    protected $fillable = [
        'program_donasi_id',
        'nama_lengkap',
        'kontak',
        'jenis_donasi',
        'jenis_donasi_lainnya',
        'deskripsi_barang',
        'alamat_pengirim',
    ];

    public function program()
    {
        return $this->belongsTo(ProgramDonasi::class, 'program_donasi_id');
    }
}
