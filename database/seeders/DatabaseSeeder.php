<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            'id' => '1',
            'name' => 'Aisha',
            'email' => 'admin@admin.com',
            'password' => hash::make('password'),
        ]);
    }
}
