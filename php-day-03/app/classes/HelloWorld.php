<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $name =[];
    public $data =[];
    private $x = 10;
    private $y = 20;
    private $z = 30;



//    public function __construct()
//    {
//        $this->message = 'Hello World';
//    }

    public function info(){



//        repeated statement
        /*
         * for
         * while
         * do while
         * foreach
         */

        $this->name = ['monir','rakib','rakhi'] ;
//        $this->data = ['Azizul', 10, 20.5, true,'Jambo', false, 'Momin'];
        $this->data =[
            0=>[
                'name' => 'Rakib',
                'email' => 'rakib@domin.deeshi',
                'phone' => '01254255',
                'location' =>'Dhaka'
            ],
            1=>[
                'name' => 'Sheikh',
                'email' => 'skuddin.ius@gmail.com',
                'phone' => '01878039762',
                'location' =>'Manikganj'
            ],
            2=>[
                'name' => 'Sazal',
                'email' => 'sazal@gmail.com',
                'phone' => '01878039762',
                'location' =>'Manikganj'
            ],
            3=>[
                'name' => 'Ashik',
                'email' => 'ashik@gmail.com',
                'phone' => '01878039762',
                'location' =>'Manikganj'
            ]
        ];
//        echo $this->name[1];
//        echo '<br/>';
//        echo $this->data[2];
        echo '<pre>';
//        print_r($this->data);
        var_dump($this->data);
        echo '<br>';
//        echo $this->data[3]['name'];
        foreach ($this->data as $item){
            echo $item['name']. ' ' . $item['email']. '<br/>';
        }

//        $name =[];
//        $name[0] ='Monir';
////        $name[1] ='Rakib';
////        $name[2] ='Rakhi';
//
//        echo $name;


//        for ($this->x=20; $this->x > 15; $this->x--){
//          echo 'habib <br/>';
//        }

//        while ($this->x <=15){
//            echo $this->x;
//            $this->x++;
//        }
//        do{
//            echo $this->x;
//            $this->x++;
//        }while($this->x <15);

//        switch ($this->x){
//            case 5 : echo 'hello rakib';
//            break;
//            case 15: echo 'hello Azizul';
//            break;
//            case 20: echo 'Hello Saju';
//            break;
//            case 10: echo 'Hello Raju';
//            break;
//            default: echo 'BD';
//        }

//        if ($this->x > $this->y){
//            echo 'Hello BITM';
//        }elseif ($this->y > $this->z){
//            echo 'Hello Basisi';
//
//        }elseif ($this->z < $this->x){
//            echo 'Hello Bangladesh';
//        }else{
//            echo 'bye bye';
//        }

//        if($this->x > $this->y){
//            echo 'Hello BITM';
//        }else{
//            echo 'Hello Porimoni';
//        }


        //Statement
        /*
         *syntex
         *
         */

        /*
         * single line statement
         * conditional statement
         * repeated statement
         */
//        echo $this->message = 'Hello World';
    }

}