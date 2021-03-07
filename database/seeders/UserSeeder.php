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
        DB::table('users')->insert(
        [/*
            ['name' => 'hadjer sahari',
            'email' => 'sahari_hadjer@yahoo.com',
            'password' => Hash::make('12345')
           ],
           ['name' => 'imene sahari',
            'email' => 'sahari_imene@yahoo.com',
            'password' => Hash::make('12345')
           ],
      */
           ['name' => 'sali',
            'email' => 'sali@yahoo.com',
            'password' => Hash::make('12345')
           ]

        ]);        
    }
} 
