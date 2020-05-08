<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$input = "13231";
$reverse = strrev($input);
if ($input == $reverse) {
    echo $input . " is a palindrome";
} else {
    echo $input . " is not a palindrome";
}