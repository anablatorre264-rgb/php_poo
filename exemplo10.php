<?php

class Conta
{
    public $numero;
    public $saldo;

    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor)
    {
        if ($this->saldo >= $valor){
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }
}

$contaRobert = new Conta(1, 2000);
$contaDaniDani = new Conta(2, 300);

echo "Saldo da conta $contaRobert->numero: $contaRobert->saldo <br>";
echo "Saldo da conta $contaDaniDani->numero: $contaDaniDani->saldo <br>";

$contaDaniDani->transferir($contaRobert, 300);
echo "Transferência Efetuada <br>";

echo "Saldo da conta $contaRobert->numero: $contaRobert->saldo <br>";
echo "Saldo da conta $contaDaniDani->numero: $contaDaniDani->saldo <br>";


