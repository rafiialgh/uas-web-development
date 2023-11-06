<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksi = [
            [
                'no_transaksi' =>1,
                'nama_customer' => 'Muhammad Rafii Alghafary',
                'tgl_transaksi' => Carbon::parse('2023-10-10'),
                'diskon'=>5
            ],
        ];

        foreach ($transaksi as $key => $t) {
            Transaksi::create($t);
        }
    }
}
