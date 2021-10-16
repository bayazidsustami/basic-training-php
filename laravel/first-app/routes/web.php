<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "bays",
        "email" => "bay@mail.com",
        "image" => "photo_2.jpg"
    ]);
});

$blog_post = [
    [
        "title" => "Judul blog pertama",
        "slug" => "judul-blog-pertama",
        "author" => "Bay bay",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis nam reprehenderit similique molestias numquam eum? Modi magnam omnis tempora iusto vel enim ex sapiente incidunt quam repellat doloremque, eum est repellendus suscipit, voluptatum molestias tenetur facere ipsam in eligendi. Odio ullam ex quas eaque error at rem provident, sit suscipit expedita blanditiis consequuntur illum! Suscipit nemo illo doloribus, consectetur provident ipsam ratione nulla aspernatur sunt dolores debitis excepturi explicabo cupiditate vitae ab asperiores quis ipsa harum consequuntur! Unde, repellat nihil?"
    ],
    [
        "title" => "Judul blog kedua",
        "slug" => "judul-blog-kedua",
        "author" => "ryan the parker",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat iste adipisci iusto doloremque nobis! Officiis optio doloribus reiciendis ab beatae magnam sit voluptatum exercitationem necessitatibus vel nostrum, aut sequi minima dolor quas illo animi itaque officia. Id mollitia perspiciatis fugiat facilis suscipit consequatur nam officia eveniet repudiandae nulla ea soluta consequuntur natus provident deleniti rerum aliquam, debitis tempore eligendi beatae vitae vel amet! Illum, quam quidem omnis fuga ex sint blanditiis mollitia incidunt? Facere minus laborum nesciunt nisi, ratione, error autem itaque tenetur repudiandae suscipit eaque. Officiis delectus dicta adipisci explicabo voluptas ut ullam aperiam recusandae dignissimos magnam, dolore quod."
    ]
];

Route::get('/blog', function () use ($blog_post) {
    return view('blog', [
        "title" => "Blogs",
        "blogs" => $blog_post
    ]);
});

Route::get('blogs/{slug}', function ($slug) use ($blog_post) {
    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('blog_detail', [
        "title" => "Details Blog",
        "post" => $new_post,
    ]);
});
