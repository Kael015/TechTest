<?php
function writeMsg() {
  $a = 12;
  $b = 3;
  $x = 0;
  while( $a >= 0 ) {
    
    $a=$a-$b;
    $x++;
}
$x= $x-1;
echo $x; 
}

writeMsg(); // call the function
?> 