<html>

<head>
    <title>Gestão</title>
</head>

<body>
    <p>
        Faça um script para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
        Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
        comprar apenas latas de 18 litros;
        comprar apenas galões de 3,6 litros;
        misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.
    </p>

    <form action="loja_de_tintas.php" method="post" id="form">
        Área pintada: <input type="number" name="area"> m² <br />

        <input type="submit" , name="calculate" , value="Calcular">
    </form>
    <?php
    if (@$_POST['calculate']) {
        $area = $_POST['area'];
        $litro = $area / 6;

        $round_litro = ceil($litro);
        echo "Você precisará de $round_litro litros de tinta <br/>";

        // comprar apenas latas de 18 litros;
        $qtd18L = ceil($litro / 18);
        if ($qtd18L <= 1) {
            echo 'Você poderá comprar uma lata de 18 litros com o valor de R$ 80,00 <br/>';
        } else {
            $value = round($qtd18L * 80, 2);
            echo "Você poderá comprar $qtd18L latas de 18 litros com o valor de R$ $value <br/>";
        }

        $qtd3_6L = ceil($litro / 3.6);
        if ($qtd3_6L <= 1) {
            echo 'Você poderá comprar uma lata de 3,6 litros com o valor de R$ 25,00 <br/>';
        } else {
            $value = round($qtd3_6L * 25, 2);
            echo "Você poderá comprar $qtd3_6L latas de 3,6 litros com o valor de R$ $value <br/>";
        }

        $mistura18L = round($litro / 18, 0);
        $mistura3_6L = ceil(($litro - ($mistura18L * 18)) / 3.6);

        // if ($mistura3_6L >= 1) {
        //     $mistura3_6L++;
        // }
        $val18 = $mistura18L * 80;
        $val3 = $mistura3_6L * 25;
        echo "Você poderá comprar $mistura18L latas de 18 litros com o valor de R$ $val18 e $mistura3_6L latas de 3,6 litros com o valor de $val3 <br/>";
    }
    ?>
</body>

</html>