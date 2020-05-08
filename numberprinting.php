<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for ($i = 1; $i <= 5; $i++) {
    for ($a = 5; $a >= $i; $a--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <=  5; $i++) {
    for ($a = 5; $a >= $i; $a--) {
        echo " ";
    }
    for ($j = 4; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br>";
}