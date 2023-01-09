<?php
function register_user(){
    echo "User has been registered";
}
register_user();
$names="Samwel";
echo '<br>';
function create_user($username){
    echo "user $username has been created";
}
create_user("Sam");
function add($num1,$num2){
    return $num1+$num2;
}
$sum=add(5,10);
//echo $sum;
echo "<br>";
function subtract($dig1=10,$dig2=5){
    return $dig1-$dig2;
}
echo subtract();
echo "<br>";
$modulo=function($r,$k){
    return $r % $k;
};
echo $modulo(9,3);
echo "<br>";
//arrow functions
function multiply($number1,$number2){
    return $number1*$number2;
}
$multiply=fn($number1,$number2) => 
$number1 * $number2;
echo $multiply(8,10);
echo "<br>";
//global variables
function good_morning(){
    global $names;
    echo $names;
}
good_morning();
?>