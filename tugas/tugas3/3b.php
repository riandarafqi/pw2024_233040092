<?php
function urutanAngka($angka) {

    $Angka = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $Angka++ . " ";
        }
        echo "<br>";
    }
}

urutanAngka(5);