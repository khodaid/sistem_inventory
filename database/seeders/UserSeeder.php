<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'username' => 'danang',
                'nama' => 'Danang Pradana',
                'no_telp' => '12345679',
                'status' => 'adminGudang',
                'password' => Hash::make('password'),
            ],
            [
                'username' => 'artani',
                'nama' => 'Artani Zakirof',
                'no_telp' => '12345679',
                'status' => 'marketing',
                'password' => Hash::make('password'),
            ]
        ];

        User::insert($data);
    }
}
