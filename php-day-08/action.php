<?php
require_once 'vendor/autoload.php';
use App\classes\WordCount;

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        include "pages/home.php";
    } elseif ($_GET['page'] == 'word-count') {
        include 'pages/word-count.php';
    }

}elseif (isset($_POST['btn_count']))
{
    if ($_POST['btn_count']=='Count me')
    {
        $wordCount = new WordCount($_POST);
        $result =$wordCount->getResult();
        include 'pages/word-count.php';
    }
}
