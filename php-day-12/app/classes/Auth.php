<?php


namespace App\classes;


class Auth
{
    private $email = 'admin@admin.com';
    private $password = '123456';

    private $userEmail;
    private $userPassword;

    public function __construct($post)
    {

        $this->userEmail = $post['email'];
        $this->userPassword = $post['password'];
    }

    public function login()
    {
        if($this->userEmail == $this->email && $this->userPassword == $this->password)
        {
            header('Location: action.php?page=home');
        }else
        {
            return 'Email or password is invalid';
        }
    }

}