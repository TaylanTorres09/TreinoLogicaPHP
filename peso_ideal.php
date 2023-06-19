<html>

<head>
    <title>Gestão</title>
</head>

<body>
    <p>
        Tendo como dado de entrada a altura (h) de uma pessoa, 
        construa um script que calcule seu peso ideal, utilizando as seguintes fórmulas:
        Para homens: (72.7*h) - 58
        Para mulheres: (62.1*h) - 44.7
    </p>

    <form action="peso_ideal.php" method="post" id="form">
        Altura: <input type="number" name="altura"> m <br />

        <input type="submit" , name="calculate" , value="Calcular">
    </form>
    <?php
    if (@$_POST['calculate']) {
        $altura = $_POST['altura'];

        $homem = number_format(72.7 * $altura - 58, 2, ',', '');

        $mulher = number_format(62.1 * $altura - 44.7, 2, ',', '');

        echo "Peso ideal para homens: $homem <br/>";
        echo "Peso ideal para mulheres: $mulher <br/>";
    }
    ?>
</body>

</html>