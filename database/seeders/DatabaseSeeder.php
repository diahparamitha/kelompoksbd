<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\daftar_menu;
use App\Models\daftar_genre;

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
        \App\Models\daftar_tvshow::factory(10)->create();
        \App\Models\daftar_director::factory(10)->create();
        \App\Models\daftar_episode::factory(10)->create();
        \App\Models\daftar_pemain::factory(10)->create();
       \App\Models\daftar_film::factory(10)->create();

        daftar_menu::create([
            'nama_menu' => 'Pilihan'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Original',
        ]);

        daftar_menu::create([
            'nama_menu' => 'Populer'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Korean'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Indian'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Anime'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Chinese'
        ]);

        daftar_menu::create([
            'nama_menu' => 'Thai'
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

           daftar_genre::create([
            'nama_genre' => 'horror'
        ]);

            daftar_genre::create([
            'nama_genre' => 'comedy'
        ]);

             daftar_genre::create([
            'nama_genre' => 'romantic'
        ]);

              daftar_genre::create([
            'nama_genre' => 'family'
        ]);

    }
}
