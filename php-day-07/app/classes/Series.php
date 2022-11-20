<?php


namespace App\classes;


class Series
{
    public $startingNumber;
    public $endingNumber;
    public $result;
    public $sum;

    public function __construct($number)
    {
        $this->startingNumber = $number['start_number'];
        $this->endingNumber = $number['end_number'];

    }

    public function getResult()
    {
        for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
        {
            $this->result += $this->startingNumber;
        }
        return $this->result;
    }

//    public function getAddition()
//    {
//        for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
//        {
//            $this->sum += $this->startingNumber;
//        }
//        return $this->sum;
//    }

}