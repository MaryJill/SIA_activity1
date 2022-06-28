<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Mary Jill Abaniel',
                'email'=> 'abaniel@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'Keth Smith',
                'email'=> 'ali@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('ali123456')
            ],

            [
                'name'=> 'Loe Sena',
                'email'=> 'hello@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('seni123456')
            ],
            [
                'name'=> 'Dive Doe',
                'email'=> 'gray@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('dive12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
