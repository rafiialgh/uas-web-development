<?php

namespace Database\Seeders;

use App\Models\Valas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CreateValasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valas = [
            [
                'nama_valas'=>'USD',
                'nilai_jual'=>15000,
                'nilai_beli'=>14000,
                'tanggal_rate'=>Carbon::parse('2023-10-10')
            ]
        ];

        foreach ($valas as $key => $v) {
            Valas::create($v);
        }
    }
}
