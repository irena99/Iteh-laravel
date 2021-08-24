<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; //to encript the password

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
            'username'=>'a',
            'password'=>Hash::make('a1'),
            'email'=>'irena.stanic99@gmail.com',
            'name'=>'Irena',
            'surname'=>'Stanic'
        ]);
    }
}
