<?php
$nome = 'Amanda';
$peso = 70;
$altura = 1.65;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $classificacao = "Baixo peso";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
} elseif ($imc < 35) {
    $classificacao = "Obesidade grau 1";
} elseif ($imc < 40) {
    $classificacao = "Obesidade grau 2";
} else {
    $classificacao = "Obesidade grau 3";
}

$imc_formatado = number_format($imc, 2, ',', '.');

echo "O valor do IMC da $nome é $imc_formatado. <br>";
echo "O seu IMC está detectando $classificacao. <br>";

// fiz esse para testar o meu imc estruturada, deu certo 😁😁