<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class genre_tvshowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
   public function definition()
    {
        return [
            'id_tvshow' => mt_rand(1,3),
            'id_genre' => mt_rand(1,3),
        ];
    }
}
