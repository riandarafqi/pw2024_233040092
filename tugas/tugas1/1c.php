<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .kotak {
        background-color: salmon;
        width: 75px;
        height: 75px;
        border:2px solid black;
        line-height: 75px;
        text-align:center;
    }
    .kotak2 {
        display:flex;
    }
    .kotak3 {
        display:flex;  
    }
</style>
<body>
    <div class="kotak">
        <div class="kotak1">1</div>
    </div>
    <div class="kotak2">
        <div class="kotak">2</div>
        <div class="kotak">2</div>
    </div>
    <div class="kotak3">
        <div class="kotak">3</div>
        <div class="kotak">3</div>
        <div class="kotak">3</div>
    </div>
</body>
</html>