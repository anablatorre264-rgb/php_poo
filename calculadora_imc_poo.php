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

    function calcularImc(): float
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    function exibirIMC(): string 
    {
        $imc_formatado = number_format($this->imc, 2, ',', '.');
        return "O IMC de {$this->nome} é {$imc_formatado}";
        // variavel da classe coloca this
        // variavel local pode colocar direto
    }
} 

$roberto = new Pessoa ('Roberto', 90, 1.72);
$renan = new Pessoa ('Renan', 100, 1.73);
$amanda = new Pessoa ('Amanda', 60, 1.70);

echo $roberto->exibirIMC(). "<br>"; 
echo $renan->exibirIMC(). "<br>"; 
echo $amanda->exibirIMC(). "<br>"; 