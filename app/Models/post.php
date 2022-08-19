<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class post extends Model

class post
{
    // use HasFactory;
    private static $blog_posts =
    [
        [
            "judul"  => "Judul Post Pertama",
            "slug"   => "judul-post-pertama",
            "author" => "Raditya Suardi Tanjung",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            In vel sequi aliquam doloribus neque beatae facere nisi velit hic harum veritatis consequatur, 
            repudiandae reprehenderit itaque illum dolorum iste excepturi enim voluptate recusandae molestias 
            quod ducimus suscipit? Molestias, officia ratione tenetur blanditiis maxime reprehenderit, eum autem 
            dignissimos corporis quae nihil rem possimus explicabo cumque minima pariatur vel. Dolorum animi reprehenderit 
            in dolor perspiciatis maiores doloremque ratione optio aliquam aspernatur necessitatibus soluta ducimus reiciendis, 
            molestiae ullam quibusdam commodi, quaerat similique atque? Quas."   
        ],
    
        [
            "judul"  => "Judul Post kedua",
            "slug"   => "judul-post-kedua",
            "author" => "Fadhilah Ramadhan",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            In vel sequi aliquam doloribus neque beatae facere nisi velit hic harum veritatis consequatur, 
            repudiandae reprehenderit itaque illum dolorum iste excepturi enim voluptate recusandae molestias 
            quod ducimus suscipit? Molestias, officia ratione tenetur blanditiis maxime reprehenderit, eum autem 
            dignissimos corporis quae nihil rem possimus explicabo cumque minima pariatur vel. Dolorum animi reprehenderit 
            in dolor perspiciatis maiores doloremque ratione optio aliquam aspernatur necessitatibus soluta ducimus reiciendis, 
            molestiae ullam quibusdam commodi, quaerat similique atque? Quas."
        ]
    ];

    public static function all()
    {
        // apabila property biasa gunakan this apabila static gunakan self
        //changing the normal array to a collection so that it can use builtit function
        return collect(self::$blog_posts);
    }
       

    public static function find($slug)
    {
        // apabila property biasa gunakan this apabila static gunakan self
        // $posts = self::$blog_posts; //put all the array in posts
        $posts = static::all(); //use static for calling static method
        // return $posts->first();
        // return $slug;
        // return $posts;
        //return $posts[0]["slug"];  
        return $posts->firstwhere('slug' === $slug); //using collection builtin function
         
        
        // foreach($posts  as $post)
        // {
        //     if($post["slug"] === $slug) //check from the data which one has the same slug as $slug data
        //         {
        //             $newPost = $post;
        //             return $newPost;
        //         }
        // }

    }
}
