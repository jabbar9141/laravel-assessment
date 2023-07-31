<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.admin'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'alex carry',
                'email' => 'alexcarry@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.client'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.client'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'naseer',
                'email' => 'nasseer@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.client'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'kia',
                'email' => 'kia@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.client'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'morgan',
                'email' => 'morgan@gmail.com',
                'password' => 'secret12',
                'user_type' => config('assessment.user_type.client'),
                'email_verified_at' => now()
            ]
        ];

        foreach ($users as $user) {
            $user['created_at'] = now();
            $user['updated_at'] = now();
            User::create($user);
        }


    }
}
