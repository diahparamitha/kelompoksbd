<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pemain_tvshow_filmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pemain' => mt_rand(1,3),
            'id_tvshow' => mt_rand(1,3),
            'id_film' => mt_rand(1,3),
        ];
    }
}
