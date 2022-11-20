<?php


namespace App\classes;


class Products
{
    public $products;
    public function allProducts(){
        $this->products =[
            0=> [
                'id'=>1,
                'name'=>'White Shirt',
                'price'=>'5000',
                'image'=>'assets/image/11.webp',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ],
            1=> [
                'id'=>2,
                'name'=>'White Pant',
                'price'=>'3000',
                'image'=>'assets/image/12.jpg',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ],
            2=> [
                'id'=>3,
                'name'=>'White Shoe',
                'price'=>'7000',
                'image'=>'assets/image/13.jpeg',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ],
            3=> [
                'id'=>4,
                'name'=>'Black Watch ',
                'price'=>'8000',
                'image'=>'assets/image/14.jpg',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ],
            4=> [
                'id'=>5,
                'name'=>'Black Belt',
                'price'=>'9000',
                'image'=>'assets/image/15.jpg',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ],
            5=> [
                'id'=>6,
                'name'=>'Red Saree',
                'price'=>'15000',
                'image'=>'assets/image/16.jpg',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, perferendi'
            ]

        ];
        return $this->products;
    }

}
