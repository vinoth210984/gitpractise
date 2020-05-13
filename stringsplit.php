<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$input="This is Vinoth";
//$string = "123,456,78,000";  
$str_arr = preg_split ("/\ /", $input);  
print_r($str_arr); 
      
?>