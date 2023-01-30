<?php
class User{


private $name;
public $email;
public $password;
//creating a constructor
public function __construct($name,$email,$password){
    //Assign properties
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;


}
//methods are functions that belong to a class
function setName(){
    $this->name= $name;
}
function getName(){
    return $this->name;
}
function login(){
    return "User $this->name is logged in"."<br>";
}
//Destructor is called when an object is destroyed
function __destruct(){
    echo "The username is $this->name.";
}

}
//Instantiate a new user
//$user1->"Sam";
//echo user1->name;
$user1 =new  User("Sam","sammacharia@gmail.com","123456");
echo $user1-> getName() . "<br>";
echo $user1->login();
//inheritance,polymorphism,abstraction,encapsulation
//Inheritance is the abilty to create a new class from an existing class, extend keyword is used
class employee extends User{
    public function __construct($name, $email,$password,$title){
        parent::__construct($name,$email,$password);
        $this->title=$title;
    }
    function getTitle(){
        return $this->title;
    }
    function getEmail(){
        return $this->email;
    }
    
    
}
$employee1=new employee("Lydia","lydiamacharia@gmail.com","123456789","Managing Director ICT");
echo $employee1->getTitle();
echo "<br>";
$employee2=new employee("Luna","lunawairimu@gmail.com","123456789","Manager");
echo $employee2->getTitle();
echo "<br>";
echo $employee2->getEmail();
 

?>
