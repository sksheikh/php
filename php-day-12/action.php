<?php
require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Products;
use App\classes\Auth;

$product = new Products();

$category = new Category();
$categories = $category->getAllCategories();



if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {

       $products = $product->getAllProducts();
        include "pages/home.php";

    }elseif ($_GET['page']=='add-product')
    {
        include 'pages/add-product.php';
    }elseif ($_GET['page'] == 'category-product')
    {

        $products = $product->getCategoryWiseProduct($_GET['category_id']);
        include 'pages/category-products.php';

    }elseif ($_GET['page'] == 'login')
    {
        include 'pages/login.php';
    }


}elseif (isset($_POST['btn']))
{
    if($_POST['btn']=='Add Product')
    {
        $product = new Products($_POST, $_FILES);
        $message = $product->saveProductInfo();
        include 'pages/add-product.php';

    }elseif ($_POST['btn'] == 'login'){

        $auth = new Auth($_POST);
        $message = $auth->login();
        include 'pages/login.php';
    }

}
