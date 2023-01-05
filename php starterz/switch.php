<?php
echo "1 = area of Triangle<Br>";
echo "2 = area of Rectangle<Br>";
echo "3 = area of Square<Br>";

$m;$Base;$Height;

if(isset($_GET['m']) && !empty($_GET['m']))
{
    $m = $_GET['m'];
    
}
if(isset($_GET['Base']) && !empty($_GET['Base']))
{
    $Base = $_GET['Base'];
    
}
if(isset($_GET['Height']) && !empty($_GET['Height']))
{
    $Height = $_GET['Height'];
    
}

if(!empty($m))
{
switch($m){
    case '1':
        Triarea($Base,$Height);
        break;
    
    case '2':
        Recarea($Base,$Height);
        break;

    case '3':
        Squarea($Base,$Height);
        break;
        
    default :
        echo "Invalid Input";
}
}

function Triarea($Base,$Height)
{
    $area = (1/2)*($Base*$Height);
    echo "Area of Triangle is : $area";
}

function Recarea($Length,$Breadth)
{
    $area = ($Length*$Breadth);
    echo "Area of Rectangle is : $area";
}

function Squarea($Side,$height)
{
    $area = ($Side*$height);
    echo "Area of Square is : $area";
}

?>