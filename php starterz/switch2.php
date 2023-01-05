<?php
$m;$x;$y;
if (isset($_GET['m']) && !empty($_GET['m'])){
    $m = $_GET['m'];
}

for($y=$m; $y>=0; $y--)
{
    for($x=0; $x<=$m; $x++)
    {
        echo $x;
    }
   echo "<Br>";
    $m = $m -1;
}

?>