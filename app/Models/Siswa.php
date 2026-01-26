<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'kelas_id',
        'nis',
        'nama_siswa',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'email',
        'no_telepon',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
}
