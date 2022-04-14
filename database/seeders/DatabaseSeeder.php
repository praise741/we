<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'oluwamuyiwa praise',
            'email' => 'kanyinsayopraise@gmail.com',
            'password' =>'password',
        ]);
    }
}
