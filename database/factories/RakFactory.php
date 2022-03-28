<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $resultIds = DB::table('gudangs')->pluck('id');
        return [
            'id_gudang' => $this->faker->randomElement($resultIds),
            'kode_rak' => Str::random(4)
        ];
    }
}
