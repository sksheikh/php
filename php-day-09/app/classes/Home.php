<?php


namespace App\classes;


class Home
{
    public $name;
    protected $email;
    private $password;

    public function name()
    {
        echo 'Habibur Rahman';
    }
    protected function email()
    {
        echo 'email@domain.com';
    }
    private function password()
    {
        echo 'your password is 1234';
    }
    public function homes()
    {


        header('Location: action.php?page=home');
    }

}