<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gudang;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'posisi' => 'dalam_kantor'
            ],
            [
                'posisi' => 'luar_kantor'
            ]
        ];
        Gudang::insert($data);
    }
}
