<?php
$color =array("color1","color20","color3","color2");

sort($color, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($color as $key => $val)
{
    echo "color[ $key ] = $val";
}
?>