<?php

function urutanAngka ($angka) {
    $y = 1;
    for ($w = 1; $w <= $angka; $w++) {
        for ($x = 1; $x <= $w; $x++) {
            echo "$y ";
            $y++;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);