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
            align-items: center;
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

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
        <?php foreach ($table as $value): ?>
        <tr>
            <td><?= $ID->ID; ?></td>
            <td><?= $ID->name; ?></td>
            <td><?= $ID->age; ?></td>
            <td><?= $ID->address; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php
    $info = array
        (
            array("Win", 27, "Hồ Chí Minh"),
            array("Mai", 18, "Bình Dương"),
            array("Name", 20, "Thủ Đức"),
            array("Ngọc", 21, "Tân Uyên"),
        );
    ?>
</body>
</html>