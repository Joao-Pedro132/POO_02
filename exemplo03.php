<?php
// construtores
// Chamar método dentro de outro método
class Triangulo{
    public float $base;
    public float $altura;
    public float $area;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->area = $this->calcularArea();
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
}

$triangolo1 = new Triangulo(10, 20);


echo "<pre>";
print_r($triangolo1);
echo "</pre>";

?>