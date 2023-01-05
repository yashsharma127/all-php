<?php

$ori = array(1,2,3,4,5);
echo 'Original array: ';

foreach($ori as $x)
{
    echo "$x";
}
echo "<Br>";
$inserted = '$';
array_splice( $ori, 3, 0, $inserted );
echo "After inserting '$' array is: ";
foreach($ori as $x)
{
    echo "$x";
} 



?>