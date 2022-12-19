<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'kode_kelas' => '1',
            'nama_kelas' => 'Reguler',
        ]);

        Kelas::create([
            'kode_kelas' => '2',
            'nama_kelas' => 'Non Reguler',
        ]);
    }
}
