<?php
$x=5;

function re($x)
{
    if($x == 0) return;
    
    re($x-1);
    echo $x;
    
}
    re($x);
    
?>