<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$reverse=0;
$number="1234";
while($number>1){
    $reminder=$number % 10;
    $reverse=($reverse*10)+$reminder;
    $number=$number / 10;
}
echo $reverse;