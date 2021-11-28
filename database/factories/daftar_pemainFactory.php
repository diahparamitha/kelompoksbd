<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class daftar_pemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pemain' => $this->faker->randomElement([ 'Jung Ho Yeon', 'Arbani Yasiz', 'Syifa Hadju', 'Vin Diesel','Ji Chang Wook', 'Shah Rukh Han', 'ChangXin Xu','Ray', 'Mario Maurer', 'Tiara Andini']),
        ];
    }
}
