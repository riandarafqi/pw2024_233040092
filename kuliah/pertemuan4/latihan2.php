<?php
// Menghitung total volume 2 kubus
// sisi kubus a = 9, sisi kubus b = 4
$sisi_a = 9;
$sisi_b = 4;
$volume_a = $sisi_a * $sisi_a * $sisi_a;
$volume_b = $sisi_b * $sisi_b * $sisi_b;
$total = $volume_a + $volume_b;

// echo "Total volume kubus A & B = $total";

function total_volume_dua_kubus($a,$b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;
    return $total;
}
    
    echo "total volume kubus A & B = " . total_volume_dua_kubus(9, 4);
    echo "<br>";
    echo "total volume kubus C & D = " . total_volume_dua_kubus(10, 15);
    echo "<hr>";

function cetak_angka($baris){
    for ($i = 1; $i <= 5; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo 
        }
    }
}

cetak 