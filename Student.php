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

class fruits
{
    public $name;
    public $color;
}
function set_name($name){
    $this->name=$name;
}
function get_name($name){
    return $this->$name;
}
function set_color($color){
    $this->name=$color;
}
function get_color($color){
    return $this->color;
}
$apple=new fruits();
$apple->set_name('apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo"<br>";
echo "color " . $apple->get_color();

 class furniture{
     public $name;
     public $color;
     public $weight;
 }
 $chair = new furniture();
 $chair->name = 'chair';
 $chair->color='brown';
 $chair->weight='300';
 class fruit{
     public $name;
     public $color;
     public function construct($name,$color){
         $this->name=$name;
         $this->color=$color;
     }
     public function intro(){
         echo "the fruit is{$this->name} and color is {$this->color}.";
     }
 }
 class strawberry extends fruit{
     public function message(){
         echo "i like staberry";
     }
 }
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
