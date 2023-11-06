<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateMembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberships = [
            [
                'nama' => 'GOLD',
                'diskon' => 3,
                'minimum_profit' => 3000,
            ],
        ];

        foreach ($memberships as $key => $membership) {
            Membership::create($membership);
        }
    }
}
