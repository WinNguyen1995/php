<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form method="post" action="">
        Hãy chọn số thứ nhất: <input type="number" name="num1" value="">
        <p>
            Hãy chọn số thứ hai : <input type="number" name="num2">
        <p>
            Hãy chọn số thứ ba: <input type="number" name="num3">
        <p>
            <input type="submit" value="Tính tổng">
    </form>
    <?php
    $num1 = +htmlspecialchars($_REQUEST["num1"]);
    $num2 = +htmlspecialchars($_REQUEST["num2"]);
    $num3 = +htmlspecialchars($_REQUEST["num3"]);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($num1)) {
            // echo "Hãy nhập vào số thứ nhất! <br>";
            $num1 = 0;
            echo "Số thứ nhất là: " . $num1 . "<br>";
        } else {
            echo "Số thứ nhất là: " . $num1 . ".<br>";
        }
    }
    echo "<br>";
    var_dump($num1);
    echo "<p></p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($num2)) {
            // echo "Hãy nhập  vào số thứ hai! <br>";
            $num2 = 0;
            echo "Số thứ hai là: " . $num2 . ".<br>";
        } else {
            echo "Số thứ hai là: " . $num2 . ".<br>";
        }
    }
    echo "<br>";
    var_dump($num2);
    echo "<p></p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($num3)) {
            // echo "Hãy nhập vào số thứ ba! <br>";
            $num3 = 0;
            echo "Só thứ ba là: " . $num3 . ".<br>";
        } else {
            echo "Số thứ ba là: " . $num3 . ".<br>";
        }
    }
    echo "<br>";
    var_dump($num3);
    echo "<p></p>";

    // if ($num1 != null && $num2 != null && $num3 != null) {
    //     $tong = $num1 + $num2 +$num3;
    //     echo "Tổng của ba số đã cho đó là: " . $tong . ".";
    // } else {
    //     echo "Vui lòng chọn đầy đủ ba số!";
    // }
    $tong = $num1 + $num2 + $num3;
    echo "Tổng của ba số đã chọn đó là: " . $tong . " <p>";
    echo "Loại dữ liệu của tổng đó là: ";
    echo var_dump($tong);
    ?>
</body>

</html>