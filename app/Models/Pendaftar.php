<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';
    protected $primaryKey = 'pendaftar_id';
    public $incrementing = false; // Karena pendaftar_id menggunakan varchar
    protected $keyType = 'string';
    
    protected $fillable = [
        'pendaftar_id',
        'periode_id',
        'nama_lengkap',
        'username',
        'password',
        'jenis_kelamin',
        'nik_anak',
        'tempat_lahir',
        'tgl_lahir',
        'asal_sekolah',
    ];
}
