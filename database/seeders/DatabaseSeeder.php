<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\{User, Category, Course, Post};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Deyvi Jara Garcia',
            'email' => 'djara@dev.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),            
            'remember_token' => Str::random(10)
        ]);
        User::factory(4)->create();
        Category::factory(3)->create();
        Course::factory(10)->create();
        Post::factory(90)->create();
    }
}
