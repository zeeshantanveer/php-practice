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

$name = $email =  $password = $roll_no = $city_name =  $mobile_no = $explain_your_self = $gender = '';

if (!empty($_POST['name'])){
    $name = $_POST['name'];
}
if (!empty($_POST['email'])){
    $email = $_POST['email'];
}
if (!empty($_POST['password'])){
    $password = $_POST['password'];
}
if (!empty($_POST['roll_no'])){
    $roll_no = $_POST['roll_no'];
}
if (!empty($_POST['city_name'])){
    $city_name = $_POST['city_name'];
}
if (!empty($_POST['mobile_no'])){
    $mobile_no = $_POST['mobile_no'];
}
if (!empty($_POST['explain_your_self'])){
    $explain_your_self = $_POST['explain_your_self'];
}
if (!empty($_POST['name'])){
    $gender = $_POST['gender'];
}

$student = new Student();
$student->addStudent($name, $email, $password, $city_name);
$student->showStudent();
