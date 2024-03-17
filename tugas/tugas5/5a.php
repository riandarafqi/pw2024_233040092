<?php
$mahasiswa = [
["Nama" => "Rafqi",
 "NPM" => "233040092",
 "Kelas" => "C",
],
["Nama" => "Akbar",
 "NPM" => "233040150",
 "Kelas" => "C",
],
["Nama" => "Rizki",
 "NPM" => "233040250",
 "Kelas" => "C",
],
["Nama" => "Reyhan",
 "NPM" => "23304009",
 "Kelas" => "C",
],
["Nama" => "Ariel",
 "NPM" => "23304021",
 "Kelas" => "C",
],
["Nama" => "Fanny",
 "NPM" => "233040098",
 "Kelas" => "C",
],
["Nama" => "Rehun",
 "NPM" => "233040022",
 "Kelas" => "C",
],
["Nama" => "Fajri",
 "NPM" => "233040073",
 "Kelas" => "C",
],
["Nama" => "Ikhsan",
 "NPM" => "233040062",
 "Kelas" => "C",
],
["Nama" => "Dunia",
 "NPM" => "233040034",
 "Kelas" => "C",
],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li> Nama : <?= $mhs["Nama"]; ?></li>
            <li> NPM : <?= $mhs["NPM"]; ?></li>
            <li> Kelas : <?= $mhs["Kelas"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>