
<?php

// function fact($num)
// {
// if ($num==1)
// {
// return ;
// }
// else
// {
// return $num*fact($num-1);
// }
// }

function factorial($i) {
 
    if($i <= 1) {
       return 1;
    }
    return $i * factorial($i - 1);
 }
  
echo factorial(5);
?>