<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;
use App\Models\Fakultas;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'nama_prodi' => 'Sistem Informasi',
                'nama_kaprodi' => 'Dr. Ahmad Kentung',
                'alias_prodi' => 'SI',
            ],

            [
                'nama_prodi' => 'Informatika',
                'nama_kaprodi' => 'Dr. Ahmad Kantung',
                'alias_prodi' => 'IF',
            ],

            [
                'nama_prodi' => 'Manajemen',
                'nama_kaprodi' => 'Dr. Siti Khairah',
                'alias_prodi' => 'MJ',
            ],
        ];
        
        foreach ($prodis as $prodi) {
            $prodi['fakultas_id'] = Fakultas::inRandomOrder()->first()->id;

            Prodi::create($prodi);
        }
    }
}
