<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
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
        // DB::table('login')->insert([
        //     'id' => '1',
        //     'name' => 'Aisha',
        //     'email' => 'admin@admin.com',
        //     'password' => hash::make('password'),
        // ]);
    }
}
