<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    public function exibirInformacoes() {
        return "Título: " . $this->titulo . "<br>" . 
               "Autor: " . $this->autor . "<br>" . 
               "Ano de Publicação: " . $this->anoPublicacao . "<br>" . 
               "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
    }
}

// Criando um objeto Livro
$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, true);

// Exibindo as informações do livro
echo $livro->exibirInformacoes();
?>
