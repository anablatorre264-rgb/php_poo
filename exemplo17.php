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

    public function publicFunc(){
        echo "Método Público <br>";
    }

    protected function protectedFunc(){
        echo "Método Protegido <br>";
    }

    //protege os filhos mas tbm priva de tudo
    private function privateFunc(){
        echo "Método Privado <br>";
    }

}

$teste = new Visibilidade(1, 2, 3); //instancia a classe e atribui os valores
echo "Atributo Public = $teste->varPublic"; //exibe o valor do atributo public
// echo "Atributo Protected = $teste->varProtected";
// echo "Atributo Private = $teste->varPrivate";

echo "<br>";

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();   