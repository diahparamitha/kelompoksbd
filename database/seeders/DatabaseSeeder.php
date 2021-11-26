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
        // \App\Models\User::factory(5)->create();
        // \App\Models\daftar_tvshow::factory(5)->create();
        /*\App\Models\daftar_director::factory(5)->create();
        \App\Models\daftar_episode::factory(20)->create();
        \App\Models\daftar_pemain::factory(5)->create();
        \App\Models\daftar_genre::factory(5)->create();
        \App\Models\daftar_menu::factory(3)->create();*/
        \App\Models\daftar_film::factory(5)->create();
    }
}
