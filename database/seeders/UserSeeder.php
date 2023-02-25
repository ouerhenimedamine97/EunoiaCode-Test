<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::inRandomOrder()->take(5)->pluck('id')->toArray();
        $user = User::create(
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('123123123'),
            ]
        );

        $user->subjects()->attach($subjects);
    }
}
