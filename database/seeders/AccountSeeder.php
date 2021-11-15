<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('accounts')->insert([
            'username' => 'mugiwara',
            'password' => Hash::make('kaizoku'),
            'email' => 'hyudhatama@student.ciputra.ac.id',
            'phone' => '085158039890',
            'nickname' => 'Monkey',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('accounts')->insert([
            'username' => 'roronoa',
            'password' => Hash::make('kaizokugari'),
            'email' => 'hyudhatama@student.ciputra.ac.id',
            'phone' => '085158039890',
            'nickname' => 'Zoro',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('accounts')->insert([
            'username' => 'shanks',
            'password' => Hash::make('akagami'),
            'email' => 'rsaddam@student.ciputra.ac.id',
            'phone' => '085158039888',
            'nickname' => 'Luffy',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('accounts')->insert([
            'username' => 'beckman',
            'password' => Hash::make('kaptenshanks'),
            'email' => 'rsaddam@student.ciputra.ac.id',
            'phone' => '085158039888',
            'nickname' => 'Ben',
            'gender' => 'Laki-Laki',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
