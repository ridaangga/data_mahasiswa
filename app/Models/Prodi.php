<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    //hubungkan tabel prodi dengan tabel mahasiswa
    public function prodi()
    {
        return $this->hasMany(Prodi::class); //satu prodi bisa memiliki banyak nama mahasiswa.
    }
}
