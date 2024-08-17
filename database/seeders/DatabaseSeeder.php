<?php

namespace Database\Seeders;

use App\Models\Artist;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Seed Data for Artist
        Artist::factory()->create([
            'name' => 'DPR IAN',
            'genre' => 'R&B',
        ]);

        Artist::factory()->create([
            'name' => 'Ariana Grande',
            'genre' => 'Pop',
        ]);

        Artist::factory()->create([
            'name' => 'Keshi',
            'genre' => 'R&B',
        ]);

        Artist::factory()->create([
            'name' => 'Ava Max',
            'genre' => 'Pop',
        ]);

        Artist::factory()->create([
            'name' => 'The 1975',
            'genre' => 'Pop Rock',
        ]);

        Artist::factory()->create([
            'name' => 'VIXX',
            'genre' => 'K-pop',
        ]);
    }
}
