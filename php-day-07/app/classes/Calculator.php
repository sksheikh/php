<?php


namespace App\classes;


class Calculator
{
    public  $firstNumber;
    public $lastNumber;
    public $action;
    public $result;

    public function __construct($post)
    {
        if(!empty($post['first_number']))
        {
            $this->firstNumber= $post['first_number'];

        }

        if (!empty($post['last_number']))
        {
            $this->lastNumber= $post['last_number'];

        }


            $this->action= $post['actions'];




    }

    public function getResult()
    {
        switch ($this->action)
        {
            case '+':$this->result = $this->addi();
                break;
            case '-':$this->result = $this->sub();
                break;
            case '*':$this->result = $this->multi();
                break;
            case '/':$this->result = $this->divi();
                break;
            case '%':$this->result = $this->mod();
                break;
        }
        return $this->result;

    }
    public function addi(){
        return $this->firstNumber + $this->lastNumber;
    }
    public function sub(){
        return $this->firstNumber - $this->lastNumber;
    }
    public function multi(){
        return $this->firstNumber * $this->lastNumber;
    }
    public function divi(){
        return $this->firstNumber / $this->lastNumber;
    }
    public function mod(){
        return $this->firstNumber % $this->lastNumber;
    }

}