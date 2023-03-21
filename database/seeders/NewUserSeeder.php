<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;


class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'Administrator Baru',
            'email'=> 'admin.baru@admin.com',
            'password' => Hash::make('password')
        ]);
    }
}
