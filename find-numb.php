<!DOCTYPE html>
<html>

<body>
    <?php
    for ($numb = 0; $numb <= 1000; $numb++) {
        if ($numb % 7 == 0 && $numb % 5 != 0) {
            echo "The number is: $numb <br>";
        }
    }
    ?>
</body>
</html>