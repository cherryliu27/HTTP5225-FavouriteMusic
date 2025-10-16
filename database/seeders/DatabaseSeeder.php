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
            'active' => '2012-present',
            'origin' => 'South Korea',
            'image' => 'https://www.dropbox.com/scl/fi/7ah96wkud733ic7xxaolt/DPR_Ian_1.webp?rlkey=xp0evm3579b2a56f0yije2slc&st=jsuxxm23&raw=1'
        ]);

        $ariana = Artist::factory()->create([
            'name' => 'Ariana Grande',
            'genre' => 'Pop',
            'active' => '2008-present',
            'origin' => 'America',
            'image' => 'https://www.dropbox.com/scl/fi/rjc9aazznhqquyrypkqwd/Ariana-Grande-Album-React-Podcast.jpg?rlkey=bwtchxdga435wi7vwacpq88vh&st=wp0bc581&raw=1'
        ]);
       
        $keshi = Artist::factory()->create([
            'name' => 'Keshi', 
            'genre' => 'R&B',
            'active' => '2016-present',
            'origin' => 'America',
            'image' => 'https://www.dropbox.com/scl/fi/i0v21u706srgbrjms3x8k/Keshi-1.jpg?rlkey=yevy688t3m3yvt2w1334pwkpw&st=oib5tqwm&raw=1'
        ]);
       
        $ava = Artist::factory()->create([
            'name' => 'Ava Max',
            'genre' => 'Pop',
            'active' => '2016-present',
            'origin' => 'America',
            'image' => 'https://www.dropbox.com/scl/fi/rkajzwiu8lvujts0dbee2/content_Ava-Max-Press-Photo-1-Credit-Lauren-Dunn.jpg_CROPPED.jpg?rlkey=jzrcpogf4kvqt1vfps90vxua5&st=l9fik9qf&raw=1'
        ]);
       
        $the1975 = Artist::factory()->create([
            'name' => 'The 1975',
            'genre' => 'Pop Rock',
            'active' => '2002-present',
            'origin' => 'England',
            'image' => 'https://www.dropbox.com/scl/fi/qya6qw1uepxogut52ezxt/The-1975.jpg.webp?rlkey=6a6rv80breom77a5d4kubez61&st=2w96wqpv&raw=1'
        ]);
       
        $vixx = Artist::factory()->create([
            'name' => 'VIXX',
            'genre' => 'K-pop',
            'active' => '2012-present',
            'origin' => 'South Korea',
            'image' => 'https://www.dropbox.com/scl/fi/2x2ralwynchm58faao4jg/vixx-the-5th-mini-album-continuum-concept-photo-group-v0-bagn7r2mmxzb1.jpg.webp?rlkey=xes9ty2vjvoq7csype4poy3eq&st=zbbgovci&raw=1'
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
