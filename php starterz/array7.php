<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

function merge_array_by_endex($x,$y)
{
    $temp = array(); $temp[] = $x; if(is_scalar($y))
    {
        $temp[]= $y;
    }
    else
    {
        foreach($y as $k => $v)
        {
            $temp[] = $v;
        }
    }
    return $temp;
}
echo print_r(array_map('merge_array_by_index',$array2,$array1));
?>