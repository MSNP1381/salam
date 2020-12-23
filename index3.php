<?php
$re = '/[9]{1}[6-9]{1}/m';
$str = '968955';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
// var_dump($matches);
if (count($matches)==1)
{
    echo "ok\n";
}
else{echo "wrong";}
?>