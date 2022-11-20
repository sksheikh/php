<?php


namespace App\classes;


class WordCount
{
    private $inputString;
    private $totalWord;
    private $totalChar;
    private $result;


    public function __construct($getData)
    {
        $this->inputString = $getData['input_text'];
    }
    public function getResult()
    {
        $this->totalWord = str_word_count($this->inputString);
        $this->totalChar = strlen($this->inputString);
        $this->result =[
            'totalWord'=>$this->totalWord,
            'totalChar'=>$this->totalChar,
            'inputString'=>$this->inputString
        ];


      return  $this->result;
    }

}