<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\Series;

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include "pages/home.php";
    }elseif ($_GET['page']=='calculator')
    {
        include "pages/calculator.php";
    }elseif ($_GET['page']=='series')
    {
        include "pages/series.php";
    }

}elseif (isset($_POST['calculator_btn']))
{
    $calculator =new Calculator($_POST);
    $result = $calculator->getResult();
    include 'pages/calculator.php';

}elseif (isset($_POST['series_btn'])){
    $series= new Series($_POST);
    $result = $series->getResult();
//    $addResult = $series->getAddition();
    include 'pages/series.php';
}
