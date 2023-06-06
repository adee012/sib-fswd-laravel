<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        users::create([
            'name' => 'Ade Dwi Putra',
            'email' => 'adedwiputra16@gmail.com',
            'role' => 'admin',
            'avatar' => 'img.png',
            'phone' => '085377805905',
            'addres' => 'Pematang Lumut, Jambi',
            'password' => 'ade123',
        ]);
    }
}
