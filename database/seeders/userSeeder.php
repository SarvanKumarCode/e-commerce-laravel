<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'sarvan',
            'email'=>'polireddysarvan24@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}


