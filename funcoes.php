<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<h1>Lista de exercícios</h1>
<body>
    <?php
    echo "Questão a) escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2 tabuada";
    //Questão a) escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2
    //tabuada(2);
    $x = 0;
    $y = 2;
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 1
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 2
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 3
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 4
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 5
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 6
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 7
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 8
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 9
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1; //$x passa a valer 10
    echo "<p> $y x $x = " . $y * $x . "</p>";
    $x = $x + 1;

    //Questão b) inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].<br>
    echo "Questão b) inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].<br>";
    echo "<h2>Inverter valor: 123456789 </h2>";
    function Reverse($valor)
    {
        return strrev($valor);
    }
    $valor = "123456789";
    echo Reverse($valor) . "<br>";

    echo "<br>Questão c) que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.";
    echo "<br><h2>Maior número inteiro: </h2><br>";
    echo "Número = 8<br>";
    echo "Número = 7";
    $n1 = 8;
    $n2 = 7;
    if ($n1 == $n2) {
        echo "<p>Os números são iguais</p>";
    } elseif ($n1 >= $n2) {
        echo "<p>O número 1:" . $n1 . ", é maior que o número 2: " . $n2 . "</p>";
    } else {
        echo "<p><p>O número 1:" . $n1 . ", é menor que o número 2: " . $n2 . "</p>";
    }

    //formatar um número como CPF (###.###.###-##, onde # representa um dígito). Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.
    echo "<br>Questão d) Formatar um número como CPF (###.###.###-##, onde # representa um dígito). Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.</br>";
    echo "<h2>Formatação de CPF</h2>";
    $cpf = 7777777;
    echo str_pad($cpf, 11, '0', STR_PAD_LEFT) . "<br>"; // Use a função mb_strlen()para descobrir a quantididade de dígitos.
    echo mb_strlen("77777777777") . "<br>";
    //Use a função mb_substr() para separar os dígitos para acrenstar os pontos e traço para formatar como CPF.
    $cpf = 777777777777;
    $cpfform = substr($cpf, 0, 3) . '.' .
        substr($cpf, 3, 3) . '.' .
        substr($cpf, 6, 3) . '-' .
        substr($cpf, 9, 2);
    echo "$cpfform<br>";

    echo "<h2>Conversão</h2>";
    echo "<br>Questão e) sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)<br>";
    //e) sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)

    $fah = 90;
    $celsius = (($fah - 32) / 18);
    $celsius = round($celsius, 3);
    echo "<br>A temperatura em Celsius de 90° fahrenheit é de: " . $celsius . "<br>";
    $fah = 77;
    $celsius = (($fah - 32) / 18);
    $calsius = round($celsius, 3);
    //usado para limitar a quantidade de casas decimais
    echo "A temperatura em Celsius de 77° fahrenheit é de: " . $celsius . "<br>";
    $fah = 52;
    $celsius = (($fah - 32) / 18);
    $celsius = round($celsius, 3);
    //usado para limitar a quantidade de casas decimais 
    echo "A temperatura em Celsius de 52° fahrenheit é de:" . $celsius . "<br>";
    $fah = 12;
    $celsius = (($fah - 32) / 18);
    $celsius = round($celsius, 3);
    echo "A temperatura em Celsius de 12° fahrenheit é de: " . $celsius . "<br>";
    echo "<br>";

    //f) desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. A função deverá retornar o $texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)
    echo "f) desenvolva, em PHP, a função buscaTexto($ texto, $ busca), sendo $ texto uma variável string que contém um texto, e $ busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. A função deverá retornar o $ texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)";
    echo "<br>";

    function buscaTexto($Texto, $busca)
    {
        $texto = "Mundo esmaga";
    }
    buscaTexto(true, false);

    echo "<br> Questão g) que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.<br>";
    echo "<br>";
    if ($b = array(1, 2, 3, 4)) {
        echo "Soma: " . array_sum($b);
    }
    ?>
</body>

</html>