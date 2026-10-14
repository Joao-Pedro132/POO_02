<?php

class Carro{
    private string $modelo;
    private float $consumo;
    private int $tanque;

    public function __construct($modelo, $consumo = 10.00, $tanqueInicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros){
        if ($litros > 0){
            $this->tanque += $litros;
            echo "Tanque abastecido com " . $litros . "<br>";
        }else{
            echo "Só aceitamos valores positivos!<br>";
        }
    }

    public function dirigir($km){
        if ($km <= 0) {
            echo "Erro: A distância a percorrer deve ser maior que zero.<br>";
            return;
        }
        $combustivelNecessario = $km / $this->consumo;
        if ($this->tanque >= $combustivelNecessario) {
            $this->tanque -= $combustivelNecessario;
            echo "Viagem de " . $km ."km realizada com sucesso! Combustível restante: " . $this->tanque . " L.<br>";
        } else {
            echo "Impossível percorrer " . $km . " km. Combustível insuficiente no tanque! (Necessário: " . $combustivelNecessario . " L | Atual: " . $this->tanque . " L)<br>";
        }
    }

    public function exibirInfo(){
        echo "Modelo: " . $this->modelo. "<br>";
        echo "Consumo do carro: " . $this->consumo . "Km/L<br>";
        echo "Tanque: " . $this->tanque . "L<br>";
    }
}

$situacao1 = new Carro('Fiat UNO', 10, 20);
$situacao1->exibirInfo();
$situacao1->dirigir(300);
$situacao1->abastecer(50);
$situacao1->exibirInfo();
$situacao1->dirigir(300);
?>