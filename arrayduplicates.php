<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$str="constant";
$strsplit=str_split($str);
$arr=array_unique($strsplit);
echo implode("",$arr);
?>