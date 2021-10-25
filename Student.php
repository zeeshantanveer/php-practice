<?php


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
function get_name($color){
    return $this->$color;
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
     protected function intro(){
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

