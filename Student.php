<?php

class Student
{
    public $id, $name, $email, $password, $address;
    
    public function __construct(){
        $this->id = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->address = '';
    }

    public function addStudent($name, $email, $password, $address){
        $this->id = 1;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }
    public function showStudent(){
        $studentId = rand(10,15);
        echo '<br><----------- Student - '.$studentId.' ------------ ><br>';
        echo "<b>ID :</b> ".$studentId."<br>";
        echo "<b>Name :</b> ".$this->name."<br>";
        echo "<b>Email :</b> ".$this->email."<br>";
        echo "<b>Password :</b> ".$this->password."<br>";
        echo "<b>Address :</b> ".$this->address."<br>";
    }
}

$name = $nameErr = '';
if (empty($_POST['name'])){
    header('student_form.php');
}


echo "<pre>";
print_r($_POST);
echo "</pre>";
die();

$student = new Student();

$student->addStudent('Alia', 'alia@gmail.com', '1234567890', 'GT. Road Muridke');
$student->showStudent();
