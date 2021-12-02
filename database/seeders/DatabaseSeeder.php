<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\daftar_menu;
use App\Models\daftar_genre;
use App\Models\daftar_director;
use App\Models\daftar_episode;
use App\Models\daftar_pemain;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        \App\Models\daftar_tvshow::factory(3)->create();
       \App\Models\daftar_film::factory(3)->create();

        daftar_menu::create([
            'nama_menu' => 'Pilihan'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Original',
        ]);

        daftar_menu::create([
            'nama_menu' => 'Populer'
        ]);

        //genre
        daftar_genre::create([
            'nama_genre' => 'drama'
        ]);

         daftar_genre::create([
            'nama_genre' => 'mystery'
        ]);

          daftar_genre::create([
            'nama_genre' => 'thriller'
        ]);

        //director
           daftar_director::create([
            'nama_director' => 'Manoj Punjabi'
        ]);

           daftar_director::create([
            'nama_director' => 'Umay Shihab'
        ]);

        //pemain
            daftar_pemain::create([
            'nama_pemain' => 'Syifa Hadju'
        ]);

            daftar_pemain::create([
            'nama_pemain' => 'Rizky Nazar'
        ]);

        //episode
             daftar_episode::create([
            'no_episode' => '8'
        ]);

             daftar_episode::create([
            'no_episode' => '2'
        ]);

        
    }
}
