<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name'=> 'Roynaldi',
            'email'=>'prasbhara0604@gmail.com',
            'password'=>Hash::make('karangreja'),
            'level'=>'Admin',
        ]);
    }
}
