<?php
$m;$x;$y;$n=0;
if (isset($_GET['m']) && !empty($_GET['m']))
{
    $m = $_GET['m'];
}

for($y=0; $y<=$m; $y++)
{
    for($x=$n; $x<=$m; $x++)
    {
        echo $x;
    }
   echo "<Br>";
    $n++;
}

?>