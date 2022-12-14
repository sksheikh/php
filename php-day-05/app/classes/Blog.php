<?php


namespace App\classes;


class Blog
{
    private $blogs;
    public function __construct()
    {
        $this->blogs=[
            0=>[
                'id' => 1,
                'title' => '‘শেষ দিকে সাকিবের দারুণ ফিল্ডিং খেলাটা ঘুরিয়ে দিল’',
                'description' => 'ক্রেগ আরভিনের চোখেমুখে তখন হতাশার ছাপ। খুব কাছে গিয়েও জয় হাতছাড়া। ততক্ষণে ডাগআউট থেকে বেরিয়ে সবার সঙ্গে সৌজন্য করমর্দন শেষ করে ফেলেছেন। কিন্তু আচমকাই যেন ',
                'image' => '111.webp'
            ],
            1=>[
                'id' => 2,
                'title' => 'ট্রাসের ফোন হ্যাক করেছিলেন ‘পুতিনের এজেন্টরা’',
                'description' => 'যুক্তরাজ্যের সাবেক প্রধানমন্ত্রী লিজ ট্রাসের ব্যক্তিগত ফোন হ্যাক করা হয়েছিল। গতকাল শনিবার ডেইলি মেইল এ খবর দিয়েছে। খবর রয়টার্সের।',
                'image' => '112.webp'
            ],
            2=>[
                'id' => 3,
                'title' => 'টপ্রাথমিক শিক্ষক নিয়োগের ফল ১৫ নভেম্বরের মধ্যে',
                'description' => 'দেশের সরকারি প্রাথমিক বিদ্যালয়ে ৩২ হাজার ৫০০ সহকারী শিক্ষক নিয়োগের ফল আগামী ১৫ নভেম্বরের মধ্যে প্রকাশ করা হচ্ছে। তবে, এই পদসংখ্যা বাড়তে পারে।',
                'image' => '113.webp'
            ],
        ];
    }

    public function addBlogs()
    {
      return   $this->blogs;
    }

    public function getBlogDetails($blogId)
    {
        foreach ($this->blogs as $blog)
        {
            if($blog['id']==$blogId)
            {
                return $blog;
            }
        }
    }

}