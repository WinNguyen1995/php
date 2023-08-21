<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Value max in Array</title>
</head>
<body>
    <?php
    $mang = array(11,21,2353,467675,5.1,644,37,99,1000);
    foreach ($mang as $value) {
        echo "<span> . $value . </span>";
    }
    echo "<br>";
    echo "Số lớn nhất trong mảng đó là: " .max($mang);
    ?>
</body>
</html>