<?php 
$string="Hello world";
$strings="buenas tough programmers";
echo strlen($string);//string length
echo "<br";
echo strpos($string,"o");//string position
echo "<br>";
echo strrpos($string,"o");//returns string occurence
echo "<br>";
echo strrev($string);//string reverse
echo "<br>";
echo strtolower($string);//converts string to lowercase
echo "<br>";
echo strtoupper($string);//converts string to uppercase
echo "<br>";
echo ucwords($string);//converts string to title where first letter starts with upper case
echo "<br>";
echo str_replace("world","Everyone",$string);//first string is what string you want to replace and second string is what you are replacing
echo "<br>";
echo substr($string,5);//returns the occurrence of a character position in a string
echo "<br>";
if(str_starts_with($string,"Hello")){
    echo "Yes it does!";
}else{
    echo "No it doesn't!";
}
echo "<br>";
if(str_ends_with($string,"ld")){
    echo "Yes, it ends with ld";
}else{
    echo "Sorry, it doesn't end with ld";
}
echo "<br>";
if (str_contains($strings,"tough")){
    echo "Yes it contains, tough word";
}else{
    echo "No it doesn't contain, tough word";
}
echo "<br>";
//html entities is where users key in data
$string2="<h4> Hello world class</h4>";
echo htmlentities($string2);//html entities prevents hackers from interfering with your database
echo "<br>";
printf("%s is a %s","Samwel","great programmer");
echo "<br>";
printf("1+1= %f",1+1);
echo "<br>";
$string3="Programming is a good course";
echo str_word_count($string3);
echo "<br>";
echo strlen($string3);
echo "<br>";



?>