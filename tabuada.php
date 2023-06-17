<html>

<head>
    <title>Calculo Perimetro e raio</title>
</head>

<body>
    <p>
        Questão: Faça um script que peça um número e imprima sua Tabuada.
    </p>

    <form action="tabuada.php" method="get" id="form">
        Numero: <input type="text" name="num"><br>
        <input type="submit">
    </form>
    <?php
    $num = $_GET['num'];

    echo str_repeat('-', 10);
    echo '<br/>';
    if ($num) {
        for ($i = 1; $i <= 10; $i++) {
            $mult = $num * $i;
            echo "$num x $i = $mult";
            echo '<br/>';
            echo str_repeat('-', 10);
            echo '<br/>';
        }
    }
    ?>
</body>

</html>