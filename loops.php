<?php
$m = 5; 
  // echo "m = " . $m . "<br>";
  $count = 1;
  for ($row = $m; $row > 0; $row--) 
  {
    for ($col = $row; $col < $m ; $col++) 
     {
       printf("%4s", $count);
       $count++;
     } 
    echo "<br>";
     }
     ?>