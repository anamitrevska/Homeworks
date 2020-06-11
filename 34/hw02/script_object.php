<?php

// create class Person

// Create properties $name,$job and $age
// Create a constructor that will accept $name,$job and $age variables and put them in class properties

// Create method changeJob  which will accept parameter $newJob

// Create method happyBirthday which will increase age


// Create two new people Tom with job "Button-Pusher", with age 34 and John with job "Lever-Puller" age 41
 

    class Person {

        public $name;
        public $job;
        public $age;

        function __construct($name,$job,$age)
        {
            $this->name=$name;
            $this->job=$job;
            $this->age=$age;
        }

        function changeJob($newJob){
            $this -> job = $newJob;
        }

        function happyBirthday(){
            $this->age++;
        }
    }
 




// Output their starting point

$person1=new Person('Tom','Button-Pusher',34);
$person2=new Person('John','Lever-Puller',41);

echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Give Tom a promotion (change his job to "Box-Mover" using changeJob method) and a birthday
 
$person1 -> changeJob('Box-Mover');
 
// John just gets a year older

$person2 -> happyBirthday();
 
// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
