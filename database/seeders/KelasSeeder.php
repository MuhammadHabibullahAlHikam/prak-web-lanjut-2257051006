<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            'A', 
            'B', 
            'C', 
            'D',
        ];

        foreach($data as $kelas) {
            kelas::create([
                'nama_kelas' => $kelas,
            ]);
        }
    }
}
