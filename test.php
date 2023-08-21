<!DOCTYPE html>
<html>

<body>
    <?php

    $text = "Mai";
    echo "Hello World" . $text . "</br>";


    echo "HI </br>";
    $color = "red";
    echo "My car is " . $color . "<br>";
    //echo "My house is " . $COLOR . "<br>";
//echo "My boat is " . $coLOR . "<br>";
    
    # This is also a single-line comment
    
    $COLOR = "blue";
    echo "My car is " . $COLOR . "<br>";

    $my = "Mai";
    echo "I love <h1>$my</h1>";

    $ten = "Mai";
    //$ten = <input type="text">;
    var_dump($ten);
    echo "<br>";

    $x = 5;
    $y = 10;

    function myAdd()
    {
        global $x, $y;
        $x = $x + $y;
    }
    myAdd();
    echo $x;



    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;

    ?>

</body>

</html>