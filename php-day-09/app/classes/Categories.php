<?php


namespace App\classes;


class Categories
{
    public $categories;

    public function __construct()
    {
        $this->categories =[
            0=>[
                'id'=>1,
                'name'=>'Male'
            ],
            1=>[
                'id'=>2,
                'name'=>'Female'
            ],
            2=>[
                'id'=>3,
                'name'=>'Other'
            ],
        ];
    }

    public function allCategories()
    {
        return $this->categories;
    }
}