<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao = 'Desconhecido'){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes(){
        echo "Títula: " . $this->titulo . ", ";
        echo "Autor: " . $this->autor . ", ";
        echo "Páginas: " . $this->paginas . ", ";
        echo "Publicado em: " . $this->anoPublicacao . ".";
        echo "<br><br>";
    }
}

$livro1 = new Livro('1984', 'George Orwell', 356);
$livro1->exibirDetalhes();

$livro2 = new Livro('Admirável Mundo Novo', 'Aldous Huxley', 312, '1932');
$livro2->exibirDetalhes();
?>