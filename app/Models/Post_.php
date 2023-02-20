<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Agung Rizqy Wiryawan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia sint deleniti porro accusamus, possimus a laudantium qui vel exercitationem consequuntur, libero optio officia error consectetur iure itaque corrupti harum ea recusandae perferendis? Doloribus numquam officia itaque consequuntur distinctio voluptas maxime mollitia, rem dolor cupiditate quo totam. Explicabo quo nemo fugit."
        ],
        [
            "title" => "Judul kedua",
            "slug" => "judul-kedua",
            "author" => "Sandika Yusmana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia sint deleniti porro accusamus, possimus a laudantium qui vel exercitationem consequuntur, libero optio officia error consectetur iure itaque corrupti harum ea recusandae perferendis? Doloribus numquam officia itaque consequuntur distinctio voluptas maxime mollitia, rem dolor cupiditate quo totam. Explicabo quo nemo fugit."
        ]
    
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
