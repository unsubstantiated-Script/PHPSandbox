<?php

class Person
{
    private $name;
    private $email;
    // public static $ageLimit = 40;
    private static $ageLimit = 40;

    //Constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        //Gives the name of the person
        echo __CLASS__ . ' created!<br>';

    }

    //Destructor
    public function __destruct()
    {

        //Gives the name of the person
        echo __CLASS__ . ' destroyed!<br>';

    }

    // public function setName($name)
    // {
    //     $this->name = $name;
    // }

    public function getName()
    {
        return $this->name . '<br>';
    }
    // public function setEmail($email)
    // {
    //     $this->email = $email;
    // }

    public function getEmail()
    {
        return $this->email . '<br>';
    }

    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

// //Instantiation
// $person1 = new Person('Jimmy Joe', 'Jimminy@gmail.com');

// // $person1->setName('John Derderderp');

// echo $person1->getName();

// // $person1->setEmail('Skippity Boo');

// echo $person1->getEmail();

//Inheritance!
class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;

        echo 'A new ' . __CLASS__ . ' has been created!<br>';

    }

    public function getBalance()
    {
        return $this->balance . '<br>';
    }

}

#Static props and method
// echo Person::$ageLimit;
// echo Person::getAgeLimit();

// $customer1 = new Customer('Jimie Dough', 'doughboy@gmail.com', 300);

// echo $customer1->getBalance();