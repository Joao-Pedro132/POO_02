<?php
// construtores
class Pessoa{
    public string $nome;
    public int $idade;

    // Método contrutor, deixa alguns campos obrigatótios, deixa alguns campos para ser preenchidos

    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function exibirDadosPessoa(){
        echo "Nome: " . $this->nome . " | Idade: " . $this->idade . "<br>";
    }


}

$pessoa = new Pessoa('João', 17);

$pessoa->exibirDadosPessoa();

// $pessoa->nome = 'Recebe o valor';
// $pessoa->idade = 23;
?>