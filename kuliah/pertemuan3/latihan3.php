<?php

echo "Mulai <br>";
$nilai_awal = 1;
while ($nilai_awal <= 10) {
    echo "Hello World $nilai_awal x! <br>";
    $nilai_awal = $nilai_awal + 5;
}
echo "Selesai <br>";


echo "<hr>";


echo "Hello World 1 x! <br>";
for($i = 1; $i <= 10; $i += 2) {
    echo "Hello  World $i x! <br>";
}

echo "<hr>";



echo "Mulai <br>";
for($i = 10; $i >= 1; $i--){
echo "Hello World $i<br>";
}

?>