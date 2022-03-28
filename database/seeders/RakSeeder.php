<?php

namespace Database\Seeders;

use App\Models\Rak;
use Database\Factories\RakFactory;
use Illuminate\Database\Seeder;
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
        // $resultIds = DB::table('gudangs')->pluck('id');

        foreach(range(1,5) as $i)
        {
            $resultIds= Rak::factory()->create();
            // $data = [
                // 'id_gudang' => $this->faker->randomElement($resultIds),
                // 'id_gudang'=> Rak::factory()->create(),
                // 'kode_rak' => Str::random(4)
            //     'id_gudang' => '1',
                // 'kode_rak' => 'aa'
            // ];
            $data = [
                [
                    'id_gudang' => $resultIds->id_gudang,
                    'kode_rak' => $resultIds->kode_rak
                ]
            ];
        }
        Rak::insert($data);
    }
}
