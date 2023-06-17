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
        
        <select name="operation">
            <option value="adi">Adição</option>
            <option value="sub">Subtração</option>
            <option value="mult">Multiplicação</option>
            <option value="div">divisão</option>
        </select>
        <input type="submit" , name="calculate" , value="Calcular">
    </form>
    <?php

    function tabuada($num, $i, $operation) {
        switch($operation) {
            case 'adi':
                return array('value' => $num + $i, 'op' => '+');
                break;
            case 'sub':
                return array('value' => $num - $i, 'op' => '-');
                break;
            case 'mult':
                return array('value' => $num * $i, 'op' => 'x');
                break;
            case 'div':
                return array('value' => $num / $i, 'op' => '/');
                break;
        }
    }

    echo str_repeat('-', 10);
    echo '<br/>';
    if (@$_GET['calculate']) {
        $num = $_GET['num'];
        $operation = $_GET['operation'];
        for ($i = 1; $i <= 10; $i++) {
            $values = tabuada($num, $i, $operation);
            $value = $values['value'];
            $op = $values['op'];
            echo "$num $op $i = $value";
            echo '<br/>';
            echo str_repeat('-', 10);
            echo '<br/>';
        }
    }
    ?>
</body>

</html>