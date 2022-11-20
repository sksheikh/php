<?php


namespace App\classes;


class Home
{
    public function homes()
    {

        header('Location: action.php?page=home');
    }

}