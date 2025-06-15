<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name'=>'Admin',
            'second_name'=>'diab',
            'email' => 'Admission@drdiab.best',
            'role' => 'admin',
            'phone_number'=>'0000',
            'password' => bcrypt('1234'),
        ]);
    }
}
