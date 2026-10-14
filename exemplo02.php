<?php

class Produto{
    public string $nome;
    public float $preco;
    public string $descricao;

    // Método contrutor
    public function __construct($valor1, $valor2, $valor3 = ('Sem descrição')){
    // $valor3 = ('Sem descrição') para caso ele não der valor, entrar em um valor padrão
        $this->nome = $valor1;
        $this->preco = $valor2;
        $this->descricao = $valor3;
    }
}

$camiseta = new Produto('Camiseta', 50.00);

$calca = new Produto('Calça', 100.00, 'Calça Jeans');

echo "<pre>";
print_r($camiseta);
print_r($calca);
echo "</pre>";

?>