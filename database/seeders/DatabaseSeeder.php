<?php

namespace Database\Seeders;

use App\Models\Albums;
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
        $dprian = Artist::factory()->create([
            'name' => 'DPR IAN', 
            'genre' => 'R&B',
            'active' => '2012–present',
            'origin' => 'South Korea',
            'image' => 'https://images.unsplash.com/photo-1724042164044-63cf2138b1e5?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        $ariana = Artist::factory()->create([
            'name' => 'Ariana Grande',
            'genre' => 'Pop',
            'active' => '2008–present',
            'origin' => 'America',
            'image' => 'https://images.unsplash.com/photo-1724042353731-050abb820425?q=80&w=1527&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
       
        $keshi = Artist::factory()->create([
            'name' => 'Keshi', 
            'genre' => 'R&B',
            'active' => '2016–present',
            'origin' => 'America',
            'image' => 'https://images.unsplash.com/photo-1724042486150-c0c9357d1594?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
       
        $ava = Artist::factory()->create([
            'name' => 'Ava Max',
            'genre' => 'Pop',
            'active' => '2016–present',
            'origin' => 'America',
            'image' => 'https://images.unsplash.com/photo-1724041580823-2c02426b62dd?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
       
        $the1975 = Artist::factory()->create([
            'name' => 'The 1975',
            'genre' => 'Pop Rock',
            'active' => '2002–present',
            'origin' => 'England',
            'image' => 'https://images.unsplash.com/photo-1724042332568-110b91d76496?q=80&w=1538&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
       
        $vixx = Artist::factory()->create([
            'name' => 'VIXX',
            'genre' => 'K-pop',
            'active' => '2012–present',
            'origin' => 'South Korea',
            'image' => 'https://images.unsplash.com/photo-1724042471571-351b108a09f4?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);


        //Seed Data for Albums
        Albums::factory()->create([
            'artist_id' => $dprian->id, 
            'title' => 'SAINT - EP',
            'release_year' => 2024
        ]);

        Albums::factory()->create([
            'artist_id' => $dprian->id, 
            'title' => 'Dear Insanity',
            'release_year' => 2023
        ]);

        Albums::factory()->create([
            'artist_id' => $dprian->id,
            'title' => 'Moodwings In To Order',
            'release_year' => 2022
        ]);

        Albums::factory()->create([
            'artist_id' => $dprian->id,
            'title' => 'Moodswings in This Order',
            'release_year' => 2021
        ]);


        Albums::factory()->create([
            'artist_id' => $ariana->id, 
            'title' => 'Eternal Sunshine',
            'release_year' => 2024
        ]);
        
        Albums::factory()->create([
            'artist_id' => $ariana->id, 
            'title' => 'Positions',
            'release_year' => 2020
        ]);
       
        Albums::factory()->create([
            'artist_id' => $ariana->id,
            'title' => 'Thank U, Next',
            'release_year' => 2019
        ]);
       
        Albums::factory()->create([
            'artist_id' => $ariana->id, 
            'title' => 'Dangerous Woman',
            'release_year' => 2016
        ]);

       
        Albums::factory()->create([
            'artist_id' => $keshi->id,
            'title' => 'Gabriel', 
            'release_year' => 2022
        ]);
       
        Albums::factory()->create([
            'artist_id' => $keshi->id,
            'title' => 'Bandaids', 
            'release_year' => 2020
        ]);
       
        Albums::factory()->create([
            'artist_id' => $keshi->id, 
            'title' => 'Skeletons', 
            'release_year' => 2019
        ]);
       
        Albums::factory()->create([
            'artist_id' => $keshi->id, 
            'title' => 'The Reaper', 
            'release_year' => 2018
        ]);

       
        Albums::factory()->create([
            'artist_id' => $ava->id, 
            'title' => 'My Oh My', 
            'release_year' => 2024
        ]);
       
        Albums::factory()->create([
            'artist_id' => $ava->id, 
            'title' => 'Whatever - Single', 
            'release_year' => 2024
        ]);
       
        Albums::factory()->create([
            'artist_id' => $ava->id, 
            'title' => 'Diamonds & Dancefloors', 
            'release_year' => 2023
        ]);
       
        Albums::factory()->create([
            'artist_id' => $ava->id, 
            'title' => 'Heaven & Hell', 
            'release_year' => 2020
        ]);


        Albums::factory()->create([
            'artist_id' => $the1975->id, 
            'title' => 'Being Funny in a Foreign Language', 
            'release_year' => 2022
        ]);
        
        Albums::factory()->create([
            'artist_id' => $the1975->id, 
            'title' => 'Notes on a Conditional Form', 
            'release_year' => 2020
        ]);
        
        Albums::factory()->create([
            'artist_id' => $the1975->id, 
            'title' => 'A Brief Inquiry into Online Relationships', 
            'release_year' => 2018
        ]);
        
        Albums::factory()->create([
            'artist_id' => $the1975->id, 
            'title' => 'I Like It When You Sleep, for You Are So Beautiful yet So Unaware of It', 
            'release_year' => 2016
        ]);


        Albums::factory()->create([
            'artist_id' => $vixx->id, 
            'title' => 'CONTINUUM', 
            'release_year' => 2023
        ]);
        
        Albums::factory()->create([
            'artist_id' => $vixx->id, 
            'title' => 'EAU DE VIXX', 
            'release_year' => 2018
        ]);
        
        Albums::factory()->create([
            'artist_id' => $vixx->id, 
            'title' => 'Kratos - EP', 
            'release_year' => 2016
        ]);
        
        Albums::factory()->create([
            'artist_id' => $vixx->id, 
            'title' => 'Chained Up', 
            'release_year' => 2015
        ]);
    }
}
