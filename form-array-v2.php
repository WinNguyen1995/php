<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form & Array</title>
</head>

<body>
    <form method="post">
        Hãy nhập vào loại trái cây: <input type="text" name="name-fruits">
        <p>
            <input type="submit" name="find-fruits" value="Tìm kiếm">
    </form>

    <?php
    $fruits = array("Apple", "Banana", "Orange", "Mango", "Apricot", "Berry");
    $input = htmlspecialchars($_REQUEST["name-fruits"]);

    switch ($input) {
        case empty($input):
            echo "Hãy vui lòng điền loại trái cây! ";
            break;
        case in_array($input, $fruits, TRUE):
            echo "Đã tìm thấy " . $input;
            break;
        default:
            echo "Trái cây bạn chọn không có";
    }
    ?>
</body>

</html>