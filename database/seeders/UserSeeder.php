<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'first_name' => 'Wailan',
            'last_name' => 'Tirajoh',
            'role' => 'Super',
            'email' => 'wailantirajoh@gmail.com',
            'password' => Hash::make('wailan'),
            'random_key' => Str::random(60)
        ]);
    }
}
