<html>
    <head>
        <title>Calculo Perimetro e raio</title>
    </head>
    <body>

        <p>
            Questão: Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
Para saber o valor do pi, use: M_PI (ele armazena o valor de pi).
        </p>

        <form  action="peraio.php" method="get">
        Numero 1: <input type="text" name="ray"><br>
        <input type="submit">
        </form>
        <?php
            $ray = $_GET['ray'];
            $pi = M_PI;

            $per = 2*$pi*$ray;
            $area = $pi*($ray**2);

            echo "Perímetro: $per";
            echo "area: $area";
        ?>
    </body>
</html>
