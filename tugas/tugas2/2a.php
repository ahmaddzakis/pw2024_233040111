<?php 
$depan = "Ahmad";
$belakang = "Dzaki";

for($i = 1; $i <= 100; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo "$depan $belakang <br>";
    } else if($i % 3 === 0) {
        echo "$depan <br>";
    } else if($i % 5 === 0) {
        echo "$belakang <br>";
    } else {
        echo "$i <br>"; 
    }

};