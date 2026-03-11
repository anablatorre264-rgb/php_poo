<?php

$peso = 70;
$altura = 1.65;
$imc = number_format($peso / ($altura * $altura), 2, ',', '.');

// if { $imc < 18.5 = echo 'Baixo do Peso'
// } else { 
//      $imc => 18.5 = echo 'Baixo do Peso'
// }

echo "O valor do IMC é $imc. <br>";
