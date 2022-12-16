<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run( )
    // {
    //     $people =new User();
    //     $people->name ='rakib';
    //     $people->email ='rakibuddin831@gmail.com';
    //     $people->password =bcrypt('password');

    //     $people->save();
       
    // },
    {
        $people =new User();
        $people->name ='sakib';
        $people->email ='sakibuddin831@gmail.com';
        $people->password =bcrypt('password');

        $people->save();
       
    }
    
}
