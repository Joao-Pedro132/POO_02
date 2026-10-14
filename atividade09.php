<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        echo "Vender...<br>";
        if ($quantidade <= $this->estoque){
            $this->estoque = $this->estoque - $quantidade;
            echo "Sucesso!<br>";
            echo "Quantidade vendida: " . $quantidade . " unidade(s)<br>";
            echo "Estoque reajustado... <br>";
        }else{
            echo "Estoque insuficiente!<br>";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco -= $this->preco * ($percentual / 100);
        echo "Preço reajustado!<br>";
    }

    public function exibirInfo(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: ". $this->preco . "<br>";
        echo "Estoque: " . $this->estoque . "<br>";
    }
}

$item1 = new Produto('Carro', 20000, 5);
$item1->exibirInfo();
$item1->vender(2);
$item1->reajustarPreco(50);
$item1->exibirInfo();

?>