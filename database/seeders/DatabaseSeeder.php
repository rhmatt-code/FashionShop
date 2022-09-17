<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'phone' => '0000',
            'address' => 'admin',
            'dateofbirth' => '0000',
            'password' => bcrypt('admin123'),
        ]);
    }
}
