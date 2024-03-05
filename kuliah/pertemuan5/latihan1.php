<?php
// 1. Membuat Array
$hari = array("Senin","Selasa","Rabu",);
$bulan = ["January","Februari","Maret"];
$mahasiswa = ["Rianda","Rafqi", 2.5, true];

// 2. Mencetak isi Array
// mencetak 1 elemen pada array, menggunakan index
echo $hari[2];
echo "<br>";

echo $bulan[0];
echo "<br>";

echo $mahasiswa[2];
echo "<br>";

// mencetak seluruh isi array
// digunakan khusus untuk debugging
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";




// 3. Memanipulasi isi Array
// Menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "Kamis";
print_r($hari);
