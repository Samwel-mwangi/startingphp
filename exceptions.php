<?php
function inverse($x){
    if(!$x){
        throw new exception('Division by zero');

    }
    return 1/$x;
}
echo inverse(1);
//handle exception
try{
    echo inverse(5).' ';
    echo inverse(0).' ';

}catch (Exception $e){
    echo 'Caught exception: ' , $e->getmessage(), '';

}
try{
    echo inverse(5). " " . "<br>";
    echo inverse(0). " ";
}catch(Exception $e) {
    echo 'Caught an exception: ', $e -> getMessage();
}finally{
    echo 'First finally';
}


try{
    echo inverse(5). " " . "<br>";
    echo inverse(0). " ";
}catch(Exception $e) {
    echo 'Caught an exception: ', $e -> getMessage();
}finally{
    echo 'Second finally';
}
echo 'Hello, class';







?>
