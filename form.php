<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="">
        Hãy chọn số thứ nhất: <input type="number" name="num1" value=""><p>
        Hãy chọn số thứ hai : <input type="number" name="num2"><p>
        Hãy chọn số thứ ba: <input type="number" name="num3"><p>
        <input type="submit" value="Tính tổng">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = htmlspecialchars($_REQUEST['num1']);
            if (empty($num1)) {
                echo "Hãy nhập vào số thứ nhất! <br>";
            } else {
                echo "Số thứ nhất là: " . $num1 . ".<br>";
            }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num2 = htmlspecialchars($_REQUEST["num2"]);
        if (empty($num2)) {
            echo "Hãy nhập  vào số thứ hai! <br>";
        } else {
            echo "Số thứ hai là: " . $num2 . ".<br>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num3 = htmlspecialchars($_REQUEST["num3"]);
        if (empty($num3)) {
            echo "Hãy nhập vào số thứ ba! <br>";
        } else {
            echo "Số thứ ba là: " . $num3. ".<br>";
        }
    }
    if ($num1 != null && $num2 != null && $num3 != null) {
        $tong = $num1 + $num2 +$num3;
        echo "Tổng của ba số đã cho đó là: " . $tong . ".";
    } else {
        echo "Vui lòng chọn đầy đủ ba số!";
    }
    ?>
</body>
</html>