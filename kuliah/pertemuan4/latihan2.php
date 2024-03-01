<?php

// Menghitung total volume 2 kubus
// Sisi Kubus A = 9, Sisi Kubus B = 4

// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;
// echo "Total volume kubus A & B = $total";

function Total_Volume_Dua_Kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;
    return $total;   
}

echo "Total Volume Kubus A & B = " . Total_Volume_Dua_Kubus(9, 4);
echo "<br>";
echo "Total Volume Kubus C & D = " . Total_Volume_Dua_Kubus(10, 5);

