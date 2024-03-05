<?php
$binatang = ["😺", "🤣","😒","👌","😊"];
array_push($binatang, "😎")
// array_pop($binatang)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for($i= 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang[$i]; ?> </li>
            <?php } ?>
        </ol>
        <hr>
        
        
        <h3>Daftar Makanan</h3>
        <ul>
            <li>🍕</li>
            <li>🍔</li>
            <li>🍳</li>
            <li>🍖</li>
            <li>🎂</li>
        </ul><hr>

            <h3>Daftar Binatang</h3>
            <ol>
                <?php foreach ($binatang as $b): ?>
                    <li><?= $b; ?></li>
                    <?php endforeach; ?>
                </ol>
</body>
</html>