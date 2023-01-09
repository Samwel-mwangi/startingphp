<?php
$m=4;
$count=1;
echo "m=" . $m . "<br>";
for($row=$m;$row>0;row--){
for($col=$row;$col<$row;$col++){
    printf("%4s",$count);
    $count++;
}
echo "<br";
}
?>