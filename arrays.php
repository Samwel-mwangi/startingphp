<?php
$numbers=[1,2,3,4,5,6];
var_dump($numbers);
echo "<br>";
$colors=["red","green","yellow"];
print_r($colors);
echo "<br";
echo "9999999999 <br>";
echo "<br>";
echo $numbers[0];
echo "<br>";
$color=[
    1 => "blue",
    2 => "indigo",
    3 => "magenta",
];
echo $color[1];
echo "<br>";
//associative arrays
$person1=[
    'first_name'=>'Sam',
    'last_name'=>'Mash',
    'e_mail'=>'sammymwangi@gmail.com'
];
$people=[
    $person=[
        'first_name'=>'Samwel',
        'last_name'=>'Mwangi',
        'e_mail'=>'samuelmacharia879@gmail.com'
    ],

    [
    'first_name'=>'Lydia',
    'last_name'=>'Macharia',
    'e_mail'=>'samuelmwangi879@gmail.com'
],

];
print_r(json_encode($people));//json makes the output readable
echo "<br>";
$person=["Kelcy"];
$kelcy=[20,126];
var_dump("my name is $person[0],I'm $kelcy[0] old and $kelcy[1] cm tall");
?>