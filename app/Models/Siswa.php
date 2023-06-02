<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    use HasFactory;

    protected $fillable = [
        'nama_siswa',
        'usia',
        'jeniskelamin',
        'notelpon',
        'akte',
        'alamat',
        'nik',
        'foto',
        'nama_orangtua',
        'kelas',
        'status',
        'user_id'

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
