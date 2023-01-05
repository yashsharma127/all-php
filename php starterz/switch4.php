<?php
$m;$x;$y;$n;
if (isset($_GET['m']) && !empty($_GET['m'])){
    $m = $_GET['m'];
    $n = 0-$m;
}


for($y=$m; $y>=0; $y--)
{   
    if($m != 1  && $m > 1)
    {
        echo '<center>';
  for($x=$m; $x>=1; $x--)
    {   
        if($x > 0)
        {
            echo $x;
        }
    } 
    echo '</center><br>';
    $m = $m -1;

 }
 if($m <=0 )
 {
    echo '<center>';
    for ($i=$m; $i>$n; $i--) { 
        echo $i;
    }
    
   }
    echo '</center><br>';
    
}


?>