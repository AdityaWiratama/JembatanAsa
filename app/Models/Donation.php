<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika mengikuti konvensi)
    protected $table = 'donations';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'alamat',
        'telephone',
    ];
}
