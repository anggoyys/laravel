<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'nama_dekan' => 'Dr. Ir. Budi Santoso, M.T.',
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi',
                'nama_dekan' => 'Dr. Ir. Budiono M.SE',
            ],
            [
                'nama_fakultas' => 'Fakultas Komputer dan Rekayasa',
                'nama_dekan' => 'Ir. Ahmad Ungger M.Si',
            ],
        ];

        foreach ($fakultas as $data) {
            Fakultas::create($data);
        }
    }
}
