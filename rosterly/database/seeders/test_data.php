<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class test_data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Users')->insert([
            'name' => ('User'),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('Hello')
        ]);
    }
}
