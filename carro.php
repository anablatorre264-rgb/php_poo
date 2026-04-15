<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    private function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade)
    {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) { // Validação simples
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade inválida: $novaVelocidade km/h. Deve ser entre 0 e 200 km/h.<br>";
        }
    {
        return $this->saldo;
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->velocidade = 5000; // Velocidade de foguete?
$meuCarro->velocidade = -60;   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>