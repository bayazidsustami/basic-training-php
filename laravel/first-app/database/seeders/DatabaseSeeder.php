<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * seed is create dummy data when you run it
     * 
     * run using ```php artisan db:seed``` and then you can see the magic. database has been filled
     * 
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // Category::create([
        //     "name" => "Web Programming",
        //     "slug" => "web-programming"
        // ]);
        // Category::create([
        //     "name" => "Personal",
        //     "slug" => "personal"
        // ]);

        Blog::factory(5)->create();
    }
}
