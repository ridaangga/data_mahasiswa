<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nim' => '1841111073',
            'nama' => 'ADAM NUGRAHA',
        ]);

        Mahasiswa::create([
            'nim' => '1830425001',
            'nama' => 'FAIZAL JARKASIH',
        ]);

        Mahasiswa::create([
            'nim' => '1841111072',
            'nama' => 'SITI MASITOH',
        ]);

        Mahasiswa::create([
            'nim' => '1830721006',
            'nama' => 'ZAKIA ADITIA',
        ]);

        Mahasiswa::create([
            'nim' => '1830811121',
            'nama' => 'SRI INDAH',
        ]);

        Mahasiswa::create([
            'nim' => '1832011031',
            'nama' => 'MUHAMMAD RIDHO',
        ]);

        Mahasiswa::create([
            'nim' => '1831811036',
            'nama' => 'NANDA PRIHANDANA',
        ]);

        Mahasiswa::create([
            'nim' => '1831027002',
            'nama' => 'SELAMET MAULANA',
        ]);

        Mahasiswa::create([
            'nim' => '1830111069',
            'nama' => 'NUR AISYAH',
        ]);
    }
}
