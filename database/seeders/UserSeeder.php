<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'JUAN GABRIEL CHULVER CABRERA',
            'email' => 'jgchulver@chulver.com',
            'password' => bcrypt('200301810')
        ])->assignRole('Admin');

        User::create([
            'name' => 'PROSALUD REGIONAL COCHABAMBA',
            'email' => 'prosaludcbba@chulver.com',
            'password' => bcrypt('prosalud')
        ])->assignRole('Prosalud');
    }
}
