<?php
require_once 'vendor/autoload.php';
use App\classes\Categories;
$categoris = new Categories();
$resultCategories =$categoris->allCategories();

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include "pages/home.php";
    }elseif ($_GET['page']=='add-student')
    {
        include 'pages/add-student.php';
    }

}elseif (isset($_POST['btn']))
{
    if ($_POST['btn']=='Add student')
    {
        include 'pages/add-student.php';
    }
}
