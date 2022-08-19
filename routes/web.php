<?php

use App\Models\post;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
   

    return view('Home',[
        "title"  => "home"
    ]);
});

//sending data through route
Route::get('/about', function () {

    return view('About',[
        "title"  => "about",
        "name"  => "Raditya Suardi",
        "Email" => "Mas.didot28@gmail.com"
    ]);
});

Route::get('/posts', function () {

    return view('Posts',[
        "title"  => "blog",
        "posts"  => post::all()
    ]);
});


Route::get('/posts/{slug}', function ($slug) {

    // $blog_posts = 
    // [
    //     [
    //         "judul"  => "Judul Post Pertama",
    //         "slug"   => "judul-post-pertama",
    //         "author" => "Raditya Suardi Tanjung",
    //         "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    //         In vel sequi aliquam doloribus neque beatae facere nisi velit hic harum veritatis consequatur, 
    //         repudiandae reprehenderit itaque illum dolorum iste excepturi enim voluptate recusandae molestias 
    //         quod ducimus suscipit? Molestias, officia ratione tenetur blanditiis maxime reprehenderit, eum autem 
    //         dignissimos corporis quae nihil rem possimus explicabo cumque minima pariatur vel. Dolorum animi reprehenderit 
    //         in dolor perspiciatis maiores doloremque ratione optio aliquam aspernatur necessitatibus soluta ducimus reiciendis, 
    //         molestiae ullam quibusdam commodi, quaerat similique atque? Quas."   
    //     ],

    //     [
    //         "judul"  => "Judul Post kedua",
    //         "slug"   => "judul-post-kedua",
    //         "author" => "Fadhilah Ramadhan",
    //         "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    //         In vel sequi aliquam doloribus neque beatae facere nisi velit hic harum veritatis consequatur, 
    //         repudiandae reprehenderit itaque illum dolorum iste excepturi enim voluptate recusandae molestias 
    //         quod ducimus suscipit? Molestias, officia ratione tenetur blanditiis maxime reprehenderit, eum autem 
    //         dignissimos corporis quae nihil rem possimus explicabo cumque minima pariatur vel. Dolorum animi reprehenderit 
    //         in dolor perspiciatis maiores doloremque ratione optio aliquam aspernatur necessitatibus soluta ducimus reiciendis, 
    //         molestiae ullam quibusdam commodi, quaerat similique atque? Quas."
    //     ]
    // ];

    // foreach($blog_posts  as $post)
    // {
    //     if($post["slug"] === $slug)
    //     {
    //         $newPost = $post;
    //     }
    // }

    return view('post',[
        "title"     => "Single Post",
        "post"      => post::find($slug)
    ]);
});

