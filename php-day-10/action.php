<?php
require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Products;

$category = new Category();
$categories = $category->getAllCategories();


if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include "pages/home.php";
    }elseif ($_GET['page']=='add-product')
    {
        include 'pages/add-product.php';
    }

}elseif (isset($_POST['btn']))
{
    if($_POST['btn']=='Add Product')
    {
        $product = new Products($_POST, $_FILES);
        $message = $product->saveProductInfo();

//        print_r($_POST);
        include 'pages/add-product.php';
    }
}
