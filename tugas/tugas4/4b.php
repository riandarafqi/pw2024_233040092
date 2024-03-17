<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Macam-macam perangat keras komputer</h2>
    <ul>
        <?php foreach($hardware as $hw) : ?>
            <li><?= $hw; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ul>
        <?php $hardware[] = "Card Reader"; ?>
        <?php $hardware[] = "Modem"; ?>
        <?php sort($hardware); ?>
        <?php foreach($hardware as $hw) : ?>
            <li><?= $hw; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>