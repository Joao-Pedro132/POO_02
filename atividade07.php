<?php

class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function __construct($nome, $saldo){
        $this->titular = $nome;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        echo "Tentativa de depósito...<br>";
        if ($valor > 0){
            $this->saldo = $this->saldo + $valor;
            echo "Sucesso!<br>";
        }else{
            echo "Valor do depósito tem quer ser Maior que 0 e positivo<br>";
        }
    }

    public function sacar($valor){
        echo "Tentativa de saque...<br>";
        if ($this->saldo < $valor){
            echo "Saldo insuficiente!<br>";
        }else{
            $this->saldo = $this->saldo - $valor;
            echo "Sucesso!<br>";
        }
    }

    public function exibirSaldo(){
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: R$" . Number_format($this->saldo, 2, ",", ".") . "<br>";
        echo "<br>";
    }
}

$titular1 = new ContaBancaria('João Pedro', 5000);
$titular1->exibirSaldo();
$titular1->sacar(3300);
$titular1->depositar(200);
$titular1->sacar(6000);
$titular1->exibirSaldo();

$titular2 = new ContaBancaria('Rafael', 3450);
$titular2->exibirSaldo();
$titular2->depositar(400);
$titular2->sacar(678);
$titular2->exibirSaldo();

?>