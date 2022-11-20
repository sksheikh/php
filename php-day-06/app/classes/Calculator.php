<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $action;
    public $result;
    public function __construct($data)
    {
        print_r($data);
        $this->firstNumber =$data['first_number'];
        $this->lastNumber =$data['last_number'];
        $this->action =$data['actions'];

    }

    public function getResult()
    {
        if(isset($this->action)){
            if($this->action == '+'){
                $this->result = $this->firstNumber + $this->lastNumber;
            }elseif ($this->action == '-')
            {
                $this->result = $this->firstNumber - $this->lastNumber;
            }elseif ($this->action == '*')
            {
                $this->result = $this->firstNumber * $this->lastNumber;
            }elseif ($this->action == '/')
            {
                $this->result = $this->firstNumber / $this->lastNumber;
            }elseif ($this->action == '%')
            {
                $this->result = $this->firstNumber % $this->lastNumber;
            }

        }



            return $this->result;




    }
}