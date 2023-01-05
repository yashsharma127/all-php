<?php
$m;$i;$j;
if (isset($_GET['m']) && !empty($_GET['m'])){
    $m = $_GET['m'];
}


for ($i = 1; $i <= $m; $i++) 
{
       
    for ($j = 1; $j <= $i; $j++) 
    {
        
         
            echo $j;
        
    }
    echo "<Br>";
}
?>