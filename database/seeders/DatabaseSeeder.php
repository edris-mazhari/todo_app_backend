<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Edris Mazhari',
            'email' => 'edris@mazhari.com',
            'password' =>Hash::make('12345678')
        ]);
        User::factory(10)->create();
        Todo::factory(100)->create();

    }
}
