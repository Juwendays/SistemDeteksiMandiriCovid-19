<?php

namespace Database\Seeders;

use App\User;
use DB;
use Illuminate\Database\Seeder;
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
            'name' => 'diskominfoSemarang',
            'emailadmin' => 'Diskominfo2@gmail.com',
            'password' => Hash::make('diskominfo'),
        ]);
    }
}


