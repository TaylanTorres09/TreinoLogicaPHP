<html>

<head>
    <title>Gestão</title>
</head>

<body>
    <p>
        Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um script que nos dê:
        salário bruto.
        quanto pagou ao INSS.
        quanto pagou ao sindicato.
        o salário líquido.
        calcule os descontos e o salário líquido
    </p>

    <form action="imposto_renda.php" method="post" id="form">
        Valor pago por hora: <input type="number" name="valhora"><br>
        Horas trabalhadas por mês: <input type="number" name="horas"><br>

        <input type="submit" , name="calculate" , value="Calcular">
    </form>
    <?php
    if (@$_POST['calculate']) {
        $val_hora = $_POST['valhora'];
        $horas = $_POST['horas'];

        $sal_bruto = $val_hora * $horas;
        $ir = $sal_bruto * 0.11;
        $inss = $sal_bruto * 0.08;
        $sind = $sal_bruto * 0.05;
        $sal_liquido = $sal_bruto - $ir - $inss - $sind;

        echo "+ Salário Bruto: R$ $sal_bruto <br>";
        echo "- IR (11%): R$ $ir <br>";
        echo "- INSS (8%): R$ $inss <br>";
        echo "- Sindicato (5%): R$ $sind <br>";
        echo "= Salário Liquido: R$ $sal_liquido";
    }
    ?>
</body>

</html>