<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistencia</title>
</head>

<body>
    <p>
        You must output values of resistors based on their three strips of colors.
        The first strip is the first digit of value.
        The second strip is the second digit of value.
        The third strip is the multiplier.
        
        Table of colors :
        black → digit : 0, multiplier : 1
        brown → digit : 1, multiplier : 10
        red → digit : 2, multiplier : 100
        orange → digit : 3, multiplier : 1,000
        yellow → digit : 4, multiplier : 10,000
        green → digit : 5, multiplier : 100,000
        blue → digit : 6, multiplier : 1,000,000
        violet → digit : 7, multiplier : 10,000,000
        grey → digit : 8, multiplier : 100,000,000
        white → digit : 9, multiplier : 1,000,000,000
        
        Example :
        yellow violet blue
        yellow : 4, violet : 7, blue : 1,000,000 → value of resistor is 47,000,000 Ω.
    </p>
    <p> Digite abaixo a cor das 3 resistências </p>
    <p>black, brown, red, orange, yellow, green, blue, violet, grey, white</p>
    <form method="get">
        <p>Digite as 3 cores.</p>
        Cor1: <input type="text" name="prim" /><br />
        Cor2: <input type="text" name="sec" /><br />
        Cor3: <input type="text" name="ter" /><br />

        <input type="submit" , name="calculate" , value="Calcular">
    </form>
    <?php

    if (@$_GET['calculate']) {
        $arr = array(
            "black" => ["digit" => '0', "mult" => 1],
            "brown" => ["digit" => '1', "mult" => 10],
            "red" => ["digit" => '2', "mult" => 100],
            "orange" => ["digit" => '3', "mult" => 1000],
            "yellow" => ["digit" => '4', "mult" => 10000],
            "green" => ["digit" => '5', "mult" => 100000],
            "blue" => ["digit" => '6', "mult" => 1000000],
            "violet" => ["digit" => '7', "mult" => 10000000],
            "grey" => ["digit" => '8', "mult" => 100000000],
            "white" => ["digit" => '9', "mult" => 1000000000]
        );

        $cor1 = $_GET['prim'];
        $cor2 = $_GET['sec'];
        $cor3 = $_GET['ter'];

        $calculo = intval($arr[$cor1]["digit"].$arr[$cor2]["digit"]) * $arr[$cor3]["mult"];

        echo "A soma das resistências será de $calculo ohms";
    }
    ?>
</body>

</html>