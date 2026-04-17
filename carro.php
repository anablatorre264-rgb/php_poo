<?php
class Carro
{
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) //tem que deixar público para poder ser acessado fora da classe
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade) //set para poder modificar a velocidade, mas com uma validação para garantir que os valores sejam razoáveis
    {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade inválida: $novaVelocidade km/h. Deve ser entre 0 e 200 km/h.<br> <br>";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

$meuCarro->setVelocidade(100);  // válido
$meuCarro->setVelocidade(5000); // inválido
$meuCarro->setVelocidade(-60);  // inválido

echo "Modelo: " . $meuCarro->getModelo() . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>

