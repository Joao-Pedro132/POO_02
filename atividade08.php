<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        if ($percentual > 0 && $percentual <= 10){
            $this->salario += $this->salario * ($percentual / 100);
        }else{
            $this->salario = $this->salario;
            echo "Erro!<br>";
            echo "Percentual maior que 0 e menor ou igual que 10!<br>";
        }
    }

    public function exibirSalario(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Salario: " . $this->salario . "<br>";
    }
}

$funcionario1 = new Funcionario('João Pedro', 1500);
$funcionario1->exibirSalario();
$funcionario1->aumentarSalario(10);
$funcionario1->exibirSalario();
$funcionario1->aumentarSalario(15);
$funcionario1->exibirSalario();

?>