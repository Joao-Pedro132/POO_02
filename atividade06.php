<?php

class Aluno{
    public string $nome;
    public int $nota1;
    public int $nota2;
    public float $media;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->media();
    }

    public function media(){
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function exibirInformacoes(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Média: " . $this->media . "<br>";
        echo "<br>";
    }
}

$aluno1 = new Aluno('João', 9, 10);
$aluno1->exibirInformacoes();

$aluno2 = new Aluno('Samuel', 4, 8);
$aluno2->exibirInformacoes();

echo "<pre>";
print_r($aluno1);
print_r($aluno2);
echo "</pre>";
?>