<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder tabel prodi
        Prodi::create([
            'kode_prodi' => '01',
            'nama_prodi' => 'TEKNIK SIPIL',
        ]);

        Prodi::create([
            'kode_prodi' => '02',
            'nama_prodi' => 'KIMIA',
        ]);

        Prodi::create([
            'kode_prodi' => '03',
            'nama_prodi' => 'AGRIBISNIS',
        ]);

        Prodi::create([
            'kode_prodi' => '04',
            'nama_prodi' => 'AKUAKULTUR',
        ]);

        Prodi::create([
            'kode_prodi' => '05',
            'nama_prodi' => 'TEKNIK INFORMATIKA',
        ]);

        Prodi::create([
            'kode_prodi' => '06',
            'nama_prodi' => 'AKUNTANSI',
        ]);

        Prodi::create([
            'kode_prodi' => '07',
            'nama_prodi' => 'ADMINISTRASI PUBLIK',
        ]);

        Prodi::create([
            'kode_prodi' => '08',
            'nama_prodi' => 'ADMINISTRASI BISNIS',
        ]);

        Prodi::create([
            'kode_prodi' => '09',
            'nama_prodi' => 'SASTRA INGGRIS',
        ]);

        Prodi::create([
            'kode_prodi' => '10',
            'nama_prodi' => 'PENDIDIKAN BIOLOGI',
        ]);

        Prodi::create([
            'kode_prodi' => '11',
            'nama_prodi' => 'KEPERAWATAN',
        ]);

        Prodi::create([
            'kode_prodi' => '12',
            'nama_prodi' => 'PERPAJAKAN',
        ]);

        Prodi::create([
            'kode_prodi' => '13',
            'nama_prodi' => 'PENDIDIKAN BAHASA DAN SASTRAINDONESIA',
        ]);

        Prodi::create([
            'kode_prodi' => '14',
            'nama_prodi' => 'PENDIDIKAN MATEMATIKA',
        ]);

        Prodi::create([
            'kode_prodi' => '15',
            'nama_prodi' => 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI',
        ]);

        Prodi::create([
            'kode_prodi' => '16',
            'nama_prodi' => 'PENDIDIKAN GURU SEKOLAH DASAR',
        ]);

        Prodi::create([
            'kode_prodi' => '17',
            'nama_prodi' => 'PENDIDIKAN TEKNOLOGIINFORMASI',
        ]);

        Prodi::create([
            'kode_prodi' => '18',
            'nama_prodi' => 'PENDIDIKAN JASMANI KESEHATANDAN REKREASI',
        ]);
    }
}
