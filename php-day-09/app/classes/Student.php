<?php


namespace App\classes;


class Student
{
    public $student;
    public $category_id, $name, $email;
    public $imageName, $imageDirec;

    public function one()
    {

    }

    public function saveStudentInfo()
    {
        $this->imageName =time().$this->image['name'];
        $this->imageDirec = 'assets/image/upload'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'],$this->imageDirec);

    }

}