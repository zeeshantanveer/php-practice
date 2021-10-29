<?php


class Student
{
public $Id, $name, $email, $password, $address;
public function __construct()
{
    $this->Id ='';
    $this->name ='';
    $this->email ='';
    $this->password ='';
    $this->address ='';
}
public function addStudent($Id, $name, $email, $password, $address){
     $this->Id=1;
     $this->name=$name;
     $this->email=$email;
     $this->password=$password;
     $this->address=$address;
}
public function showStudent(){
    $StudentId = rand(10,15);
    echo '<br><-----------------Student - '.$StudentId.'---------<br>>';
    echo "<br>ID :</b> ".$StudentId. "<br>";
    echo "<br>Name :</b> ".$this->name."<br>";
    echo "<br>email :</b> ".$this->email."<br>";
    echo "<br>password :</b> ".$this->password."<br>";
    echo "<br>address :</b> ".$this->address."<br>";
}
}
$student= new Student();
$student->addStudent('1','Alia','Alia@gmail.com','12345',   'GT Road muridke');
$student->showStudent();

//add student form
//