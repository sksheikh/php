<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;
use App\classes\Calculator;

//echo '<pre>';
//print_r($_POST);

$result = '';

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include "pages/home.php";
    }elseif ($_GET['page']=='full-name')
    {
        include 'pages/full-name.php';
    }elseif ($_GET['page']=='calculator')
    {
        include 'pages/calculator.php';
    }

}elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include 'pages/full-name.php';

}elseif (isset($_POST['result_submit']))
{

    $calculate = new Calculator($_POST);
    $result = $calculate->getResult();
    include 'pages/calculator.php';

}
