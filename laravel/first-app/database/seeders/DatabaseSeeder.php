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
        // \App\Models\User::factory(10)->create();
        User::create([
            "name" => "bay bay",
            "email" => "bay@mail",
            "password" => bcrypt("12345"),
        ]);
        User::create([
            "name" => "ryan the parker",
            "email" => "ryan@mail",
            "password" => bcrypt("12345"),
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Blog::create([
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut aut commodi doloremque excepturi nulla, nam ab mollitia id ad veritatis!",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere aperiam quibusdam amet, adipisci provident dolore dolorem consectetur sapiente temporibus ullam cumque non officiis eum molestias nemo culpa fuga ut mollitia placeat? Quod pariatur soluta necessitatibus animi omnis et similique eligendi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci dicta delectus consectetur cum sunt iste facilis vel quisquam nam ea quaerat veniam officiis, accusantium error libero magnam hic cumque modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate fugiat eum quam tenetur facilis accusamus iure architecto veniam cumque est eligendi repudiandae, libero neque hic. Iste quod fugiat praesentium omnis dolorem eum, quo iure a reiciendis nisi, officia dolore necessitatibus at ipsam distinctio impedit consequatur amet nostrum nulla non tempore.</p>",
            "category_id" => 1,
            "user_id" => 1
        ]);

        Blog::create([
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut aut commodi doloremque excepturi nulla, nam ab mollitia id ad veritatis!",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere aperiam quibusdam amet, adipisci provident dolore dolorem consectetur sapiente temporibus ullam cumque non officiis eum molestias nemo culpa fuga ut mollitia placeat? Quod pariatur soluta necessitatibus animi omnis et similique eligendi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci dicta delectus consectetur cum sunt iste facilis vel quisquam nam ea quaerat veniam officiis, accusantium error libero magnam hic cumque modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate fugiat eum quam tenetur facilis accusamus iure architecto veniam cumque est eligendi repudiandae, libero neque hic. Iste quod fugiat praesentium omnis dolorem eum, quo iure a reiciendis nisi, officia dolore necessitatibus at ipsam distinctio impedit consequatur amet nostrum nulla non tempore.</p>",
            "category_id" => 1,
            "user_id" => 1
        ]);

        Blog::create([
            "title" => "judul ketiga",
            "slug" => "judul-ketiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut aut commodi doloremque excepturi nulla, nam ab mollitia id ad veritatis!",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere aperiam quibusdam amet, adipisci provident dolore dolorem consectetur sapiente temporibus ullam cumque non officiis eum molestias nemo culpa fuga ut mollitia placeat? Quod pariatur soluta necessitatibus animi omnis et similique eligendi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci dicta delectus consectetur cum sunt iste facilis vel quisquam nam ea quaerat veniam officiis, accusantium error libero magnam hic cumque modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate fugiat eum quam tenetur facilis accusamus iure architecto veniam cumque est eligendi repudiandae, libero neque hic. Iste quod fugiat praesentium omnis dolorem eum, quo iure a reiciendis nisi, officia dolore necessitatibus at ipsam distinctio impedit consequatur amet nostrum nulla non tempore.</p>",
            "category_id" => 2,
            "user_id" => 1
        ]);

        Blog::create([
            "title" => "judul keempat",
            "slug" => "judul-keempat",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut aut commodi doloremque excepturi nulla, nam ab mollitia id ad veritatis!",
            "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere aperiam quibusdam amet, adipisci provident dolore dolorem consectetur sapiente temporibus ullam cumque non officiis eum molestias nemo culpa fuga ut mollitia placeat? Quod pariatur soluta necessitatibus animi omnis et similique eligendi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci dicta delectus consectetur cum sunt iste facilis vel quisquam nam ea quaerat veniam officiis, accusantium error libero magnam hic cumque modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate fugiat eum quam tenetur facilis accusamus iure architecto veniam cumque est eligendi repudiandae, libero neque hic. Iste quod fugiat praesentium omnis dolorem eum, quo iure a reiciendis nisi, officia dolore necessitatibus at ipsam distinctio impedit consequatur amet nostrum nulla non tempore.</p>",
            "category_id" => 2,
            "user_id" => 2
        ]);
    }
}
