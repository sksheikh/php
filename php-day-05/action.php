<?php

require_once 'vendor/autoload.php';

use App\classes\Blog;



if ($_GET['page']=='home'){
    include 'pages/home.php';
}elseif ($_GET['page']=='all-blogs')
{
    $blog = new Blog();
    $allBlogs = $blog->addBlogs();
//    echo '<pre>';
//    print_r($allBlogs);
    include 'pages/blogs.php';
}elseif ($_GET['page']=='details')
{
    $blog = new Blog();
    $details = $blog->getBlogDetails($_GET['id']);
    print_r($details);
    include 'pages/details.php';
}