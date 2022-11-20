<?php


namespace App\classes;


class Home
{

    public function info()
    {
        header("Location: action.php?page=home");
    }

}