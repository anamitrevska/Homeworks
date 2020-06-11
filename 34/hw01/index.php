<?php

class Person {

    public $name;
    public $age;

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }

}

    $obj=new Person();

    var_dump($obj);

?>