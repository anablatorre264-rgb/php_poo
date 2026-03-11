<?php 

class Pessoa
{
    public $nome;
    public $peso;
    public $altura;
    public $imc;

    function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome; 
        $this->peso = $peso;  
        $this->altura = $altura;  
        $this->imc = $this->calcularImc();  
    }

    function calcularImc()
    {
        return number_format( $this->peso / ($this->altura * $this->altura), 2, ',', '.');
    }
} 

$roberto = new Pessoa ('Roberto', 90, 1.72);
$renan = new Pessoa ('Renan', 100, 1.73);
$amanda = new Pessoa ('Amanda', 60, 1.70);

echo "O valor do IMC do $roberto->nome é $roberto->imc. <br>"; 
echo "O valor do IMC do $renan->nome é $renan->imc. <br>"; 
echo "O valor do IMC da $amanda->nome é $amanda->imc. <br>"; 