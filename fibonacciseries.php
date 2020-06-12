<?php
echo "Fibonacci Series \n";
$a=0;
$fn=0;
$sn=1;
echo $fn." ".$sn." ";
while($a<5){
    $newnumber=$sn+$fn;
    echo $newnumber." ";
    $fn=$sn;
    $sn=$newnumber;
    $a=$a+1;
}
