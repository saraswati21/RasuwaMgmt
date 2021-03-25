<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'UserName'=> 'swati',
            'Email'=> 'swati@swati.com',
            'Password'=> Hash::make( '12345'),
            'UserRoleId'=> '1'
        ]);
    }
}
