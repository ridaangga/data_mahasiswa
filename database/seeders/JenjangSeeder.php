<?php

namespace Database\Seeders;

use App\Models\Jenjang;
use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenjang::create([
            'kode_jenjang' => '1',
            'nama_jenjang' => 'S3',
        ]);

        Jenjang::create([
            'kode_jenjang' => '2',
            'nama_jenjang' => 'S2',
        ]);

        Jenjang::create([
            'kode_jenjang' => '3',
            'nama_jenjang' => 'S1',
        ]);

        Jenjang::create([
            'kode_jenjang' => '4',
            'nama_jenjang' => 'D3',
        ]);

        Jenjang::create([
            'kode_jenjang' => '5',
            'nama_jenjang' => 'D2',
        ]);

        Jenjang::create([
            'kode_jenjang' => '6',
            'nama_jenjang' => 'D1',
        ]);
    }
}
