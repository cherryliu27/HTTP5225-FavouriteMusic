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
            'origin' => 'South Korea'
        ]);

        $ariana = Artist::factory()->create([
            'name' => 'Ariana Grande',
            'genre' => 'Pop',
            'active' => '2008–present',
            'origin' => 'America'

        ]);
       
        $keshi = Artist::factory()->create([
            'name' => 'Keshi', 
            'genre' => 'R&B',
            'active' => '2016–present',
            'origin' => 'America'
        ]);
       
        $ava = Artist::factory()->create([
            'name' => 'Ava Max',
            'genre' => 'Pop',
            'active' => '2016–present',
            'origin' => 'America'
        ]);
       
        $the1975 = Artist::factory()->create([
            'name' => 'The 1975',
            'genre' => 'Pop Rock',
            'active' => '2002–present',
            'origin' => 'England'
        ]);
       
        $vixx = Artist::factory()->create([
            'name' => 'VIXX',
            'genre' => 'K-pop',
            'active' => '2012–present',
            'origin' => 'South Korea'
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
        
        
        // //Seed Data for Albums
        // Albums::factory()->create([
        //     'artist_id' => '1', //'DPR IAN',
        //     'DPRIAN' => 'SAINT - EP (2024)',
        //     'DPRIAN' => 'Dear Insanity (2023)',
        //     'DPRIAN' => 'Moodwings In To Order (2022)',
        //     'DPRIAN' => 'Moodswings in This Order (2021)'
        // ]);

        // Albums::factory()->create([
        //     'artist_id' => '2',//'Ariana Grande',
        //     'ArianaGrande' => 'Eternal Sunshine (2024)',
        //     'ArianaGrande' => 'Positions (2020)',
        //     'ArianaGrande' => 'Thank U, Next (2019)',
        //     'ArianaGrande' => 'Dangerous Woman (2016)'
        // ]);

        // Albums::factory()->create([
        //     'artist_id' =>'3', //'Keshi',
        //     'Keshi' => 'Gabriel (2022)',
        //     'Keshi' => 'Bandaids (2020)',
        //     'Keshi' => 'Skeletons (2019)',
        //     'Keshi' => 'The Reaper (2018)'
        // ]);

        // Albums::factory()->create([
        //     'artist_id' => '4', //'Ava Max',
        //     'AvaMax' => 'My Oh My (2024)',
        //     'AvaMax' => 'Whatever - Single (2024)',
        //     'AvaMax' => 'Diamonds & Dancefloors (2023)',
        //     'AvaMax' => 'Heaven & Hell (2020)'
        // ]);

        // Albums::factory()->create([
        //     'artist_id' => '5', //'The 1975',
        //     'The1975' => 'Being Funny in a Foreign Language (2022)',
        //     'The1975' => 'Notes on a Conditional Form (2020)',
        //     'The1975' => 'A Brief Inquiry into Online Relationships (2018)',
        //     'The1975' => 'I Like It When You Sleep, for You Are So Beautiful yet So Unaware of It (2016)'
        // ]);

        // Albums::factory()->create([
        //     'artist_id' => '6', //'VIXX',
        //     'VIXX' => 'CONTINUUM (2023)',
        //     'VIXX' => 'EAU DE VIXX (2018)',
        //     'VIXX' => 'Kratos - EP (2016)',
        //     'VIXX' => 'Chained Up (2015)'
        // ]);


    }
}
