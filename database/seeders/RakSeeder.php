<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultIds = DB::table('gudangs')->pluck('id');

        foreach(range(1,5) as $i)
        {
            $data = [
                'id_gudang' => $this->faker->randomElement($resultIds),
                'kode_rak' => Str::random(4)
            ];
            DB::insert($data);
        }
    }
}
