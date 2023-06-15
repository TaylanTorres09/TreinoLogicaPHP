<html>
    <head>
        <title>Calculo Perimetro e raio</title>
    </head>
    <body>
        <form  action="home.php" method="get">
        Numero 1: <input type="text" name="ray"><br>
        <input type="submit">
        </form>
        <?php
            // $ray = (int)readline('Enter a integer: ');
            $ray = 2;
            $pi = M_PI;

            $per = 2*$pi*$ray;
            $area = $pi*($ray**2);

            echo "Perímetro: $per";
            echo "area: $area";
        ?>
    </body>
</html>
