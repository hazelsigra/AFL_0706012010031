<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'player_Id' => '31',
            'name' => 'Hazel Sigra',
            'email' => 'hyudhatama@student.ciputra.ac.id',
            'phone' => '085158039890',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('players')->insert([
            'player_Id' => '19',
            'name' => 'Rifki Saddam',
            'email' => 'rsaddam@student.ciputra.ac.id',
            'phone' => '085158039888',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
