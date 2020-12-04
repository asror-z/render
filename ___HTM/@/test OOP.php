<?php

class Cars {


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
$chevrolet = new Cars();
$chevrolet->set_name('Malibu');
$chevrolet->set_color('black');

echo "Name: " . $chevrolet->get_name();
echo "<br>";
echo "Color: " . $chevrolet->get_color();

