<?php

// 1. Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
$bulan = array("Januari", "Februari", "Maret");
$mahasiswa = ["Ahmad", 3.5, true];

// 2. Mencetak isi Array
// Mencetak 1 elemen pada array
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";
// Mencetak seluruh array (digunakan khusus untuk debugging)
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
print_r($mahasiswa);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";

// 3. Memanipulasi isi Array
// Menambah isi array di belakang ( di akhir array: [] atau array_push() )
$hari[] = "Sabtu";
$hari[] = "Ahad";
print_r($hari);

echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);

echo "<br>";
// di awal array: ( array_unshift() )
array_unshift($mahasiswa, "233040111");
print_r($mahasiswa);

echo "<hr>";

// Menghapus isi array
// di akhir: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);

echo "<br>";
array_shift($bulan);
print_r($bulan);