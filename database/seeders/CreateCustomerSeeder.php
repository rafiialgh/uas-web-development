<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = [
            [
                'nama'=>'Muhammad Rafii Alghafary',
                'alamat'=>'Bintaro',
                'tipe_member'=>'GOLD',
            ],
            [
                'nama'=>'Muhammad Kukuh',
                'alamat'=>'Serpong',
                'tipe_member'=>'DIAMOND',
            ]
        ];

        foreach ($customer as $key => $c) {
            Customer::create($c);
        }
    }
}
