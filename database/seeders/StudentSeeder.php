<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => Str::random(10),
            'matric' => 'S216201007',
            'level' => '100lv',
            'department' => 'Computer Science',
            'gender' => 'male',
            'phone_number' => '090900999999',
            'semester' => 'first',
            'session' => '2017/2018',
            'password' => Hash::make('password'),
        ]);
    }
}
