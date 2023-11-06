<?php

namespace Database\Seeders;

use App\Models\DetailTransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateDetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailTransaksi = [
            [
                'transaksi_id' =>001,
                'nama_valas' => 'USD',
                'rate' => 14000,
                'qty'=>10
            ],
            [
                'transaksi_id' =>002,
                'nama_valas' => 'SGD',
                'rate' => 13000,
                'qty'=>15
            ],
        ];

        foreach ($detailTransaksi as $key => $dt) {
            DetailTransaksi::create($dt);
        }
    }
}
