<?php

class Conta
{
    // Atributos - Propriedades - Campls
    private $numero;
    private $saldo;

    // Método - Construtor
    function __construct($numero, $saldo)
    {
        // this vai pegar la da class conta
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    // Métodos - Getters e Setters 
    // get - so aparece e no set - aparece e pode ser alterado
    public function getNumero()
    {
        return $this->numero;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    protected function setSaldo($novoSaldo)
    {
        $this->saldo = $novoSaldo;
    }

    // Métodos
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
        if ($this->saldo >= $valor) {
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }
}

class Poupanca extends Conta
{
    protected $juros; //para eu conseguir alterar

    function __construct($numero, $saldo, $juros) //inicializar o juros para passar um valor de juros para um cliente específico
    {
        parent::__construct($numero, $saldo); //o filho classe poupança chama o construtor da classe pai (Conta) para inicializar os atributos numero e saldo
        $this->juros = $juros;
    }

    function creditar($valor)
    {
        parent::creditar($valor); //chama o método creditar da classe pai (Conta) para adicionar o valor ao saldo
        $this->atualizarJuros(); //atualiza os juros após o crédito
    }

    function atualizarJuros()
    {
        $novoSaldo = $this->getSaldo() * (1 + $this->juros); //calcula o novo saldo com os juros
        $this->setSaldo($novoSaldo);
    }
}

// Criando um objeto da classe Conta
$conta = new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta: {$conta->getNumero()} = R$ {$conta->getSaldo()},00 <br>";
//utilizo chaves para acessar o numero, pois ele é privado. uso para acessar o método e retornar o numero da conta.


// Criando um objeto da classe Poupanca
$poupanca = new Poupanca(2, 150, 0.10); // 2 - numero; 150 - saldo; 0.10 - juros;
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da poupança: {$poupanca->getNumero()} = R$ {$poupanca->getSaldo()},00 <br>";    
