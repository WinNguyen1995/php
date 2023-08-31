
<!DOCTYPE html>
<html>
<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2>Table & Array</h2>
<?php
// Khởi tạo mảng info
$info = array(
    array(1, "Win", 27, "Hồ Chí Minh"),
    array(2, "Ten1", 18, "DDFG"),
    array(3, "Ten2", 20, "TDFDF"),
    array(4, "Ten3", 21, "AKD"),
);

// Xử lý yêu cầu POST khi nút xóa được nhấn
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $indexToDelete = $_POST["delete"];
    if (isset($info[$indexToDelete])) {
        unset($info[$indexToDelete]);
    }
}
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Hành động</th>
    </tr>

    <?php
    // Lặp qua mảng info để hiển thị dữ liệu và nút xóa
    foreach ($info as $index => $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete' value='$index'>
                    <button type='submit'>Xóa</button>
                </form>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

<!-- //////////////////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table & Array</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Table & Array</h2>
    <?php
    echo "<table>";
    //Thêm 1 cột hành động để chứa button xóa
    $header = array("ID", "Name", "Age", "Address", "Hành động");    
        echo "<tr>";
        for ($i = 0; $i <count($header); $i++) {
            echo "<th>$header[$i]</th>";
        }
        echo "</tr>";

    $info = array
        (
            array(1,"Win", 27, "Hồ Chí Minh"),
            array(2,"Ten1", 18, "DDFG"),
            array(3,"Ten2", 20, "TDFDF"),
            array(4,"Ten3", 21, "AKD"),
        );    
        for ($row = 0; $row < count($info); $row++) {
            echo "<tr>";
            for ($col = 0; $col < count($info); $col++) {
                echo "<td>" . $info[$row][$col] . "</td>";   
            }
            //Mỗi vòng lặp là 1 thẻ tr, trong tr có nhiều td, do những td kia cần lặp lại để hiện thị thông tin, thì sau khi lặp xong bên ngoài vòng lặp for chỉ cần thêm 1 thẻ td (vẫn phải ở trong thẻ tr) là xong
            echo "<td><button>Xóa</button></td>";   
            echo "</tr>";
        }      
    echo "</table>";
    ?>
</body>
</html>