<?php 

class Visibilidade {
    public $varPublic; //cadastramento de 3 atributos
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic; //seleciona o atributo da classe e atribui o valor
        $this->varProtected = $varProtected ;
        $this->varPrivate = $varPrivate; ;
    }

}

$teste = new Visibilidade(1, 2, 3); //instancia a classe e atribui os valores
echo "Atributo Public = $teste->varPublic"; //exibe o valor do atributo public
echo "Atributo Protected = $teste->varProtected";
echo "Atributo Private = $teste->varPrivate";