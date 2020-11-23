<?php
echo "Hello PHP!";
echo"<br/>";

// Data Types
//String
$txt = "Hello Nabila!";
echo($txt);
echo"<br/>";

// Integer
$x = 6;
echo ($x);
echo"<br/>";
var_dump($x);
echo"<br/>";
// Float
$y = 12.22;
var_dump($y);
echo"<br/>";

//Array

$cars = array("Volvo","BMW","Toyota","Corolla");
var_dump($cars);
echo"<br/>";

// PHP String
echo strlen("Mymensingh");
echo"<br/>";
echo str_word_count("Hello Azhar");
echo"<br/>";

echo strrev("Hello Azhar");
echo"<br/>";

echo(max(5,8,7,1,4));
echo"<br/>";
echo(min(45,8,5,44,0));
echo"<br/>";

// PHP OOP

class Car{

    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    
}

$bmw = new Car();
$bmw->set_name("BMW");
$bmw->set_color('Black');

echo "Car Name: " .$bmw->get_name();
echo "<br/>";
echo "Car Color: ".$bmw->get_color();


?>