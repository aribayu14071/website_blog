<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [  // array numerik
        [ // array assosiative
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ari Bayu Bastian",
            "body" => "Proident nulla sint eiusmod pariatur proident. 
            Elit irure aliqua eu magna eu consequat cupidatat non. 
            Velit minim cupidatat culpa quis minim laborum ea voluptate esse eu. 
            Fugiat elit mollit pariatur laborum ex quis ullamco. Tempor eiusmod sunt duis consequat ut commodo velit do sunt mollit sit adipisicing ea officia.
            Est nulla et consequat magna dolore reprehenderit nostrud amet culpa in proident esse adipisicing magna. 
            Ullamco quis irure ea commodo magna est velit. Officia commodo est commodo aliquip nostrud commodo. 
            Nisi excepteur pariatur enim sint ex ea anim velit dolore do."
        ],
        [
            "title" => "Judul Tulisan kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bayu Bastian",
            "body" => "Deserunt eiusmod irure cupidatat dolore culpa sint eu esse proident quis. Veniam et culpa ipsum ullamco est et ullamco reprehenderit mollit labore exercitation et incididunt. Proident nulla sint eiusmod pariatur proident. Elit irure aliqua eu magna eu consequat cupidatat non. Velit minim cupidatat culpa quis minim laborum ea voluptate esse eu. Fugiat elit mollit pariatur laborum ex quis ullamco. Tempor eiusmod sunt duis consequat ut commodo velit do sunt mollit sit adipisicing ea officia.
            Deserunt occaecat laborum excepteur nisi adipisicing pariatur Lorem fugiat ut aute aute. Incididunt sit mollit Lorem tempor mollit in do ex ea. Labore eu nulla consectetur adipisicing cupidatat. Est nulla et consequat magna dolore reprehenderit nostrud amet culpa in proident esse adipisicing magna. Ullamco quis irure ea commodo magna est velit. Officia commodo est commodo aliquip nostrud commodo. Nisi excepteur pariatur enim sint ex ea anim velit dolore do."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
