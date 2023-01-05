<?php 
// $array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
// asort($array2);
// foreach($array2 as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// }

// $array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
// ksort($array3);
// foreach($array3 as $x=>$x_value)
// {
//     echo "Age of ".$x."is : ".$x_value."
//     ";
// }

$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
arsort($array2);
foreach($array2 as $y=>$y_value)
{
    echo "Age of ".$y."is : ".$y_value."
    ";
}


?>