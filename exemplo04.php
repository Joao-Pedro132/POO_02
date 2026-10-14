<?php
// visibilidade

class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirTitular(){
        echo "Nome: " . $this->titular . "<br>";
    }

    public function alteraTitular($novoNome){
        $this->titular = $novoNome;
    }

    public function exibirSaldo(){
        echo "Saldo: " . $this->saldo . "<br>";
    }

    public function alteraSaldo($valor){
        $this->saldo += $valor;
    }

    public function alterarSaque($valor){
        if ($this->saldo < $valor){
            echo "Não pode alterar esse valor!";
        }else{
            $this->saldo -= $valor;
        }
    }
}

$conta1 = new ContaBancaria('João Pedro', 1000);
$conta1->exibirTitular();
$conta1->exibirSaldo();
$conta1->alteraTitular('Jonas');
$conta1->alteraSaldo(4000);
$conta1->exibirTitular();
$conta1->exibirSaldo();
$conta1->alterarSaque(300);
$conta1->exibirSaldo();
$conta1->alterarSaque(70000);

?>