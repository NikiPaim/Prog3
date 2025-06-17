<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    // Constructor to initialize the attributes
    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }

    // Getter and Setter methods for all attributes
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

    // Method to display information about the book
    public function exibirInformacoes() {
        return "Título: " . $this->titulo . "<br>" . 
               "Autor: " . $this->autor . "<br>" . 
               "Ano de Publicação: " . $this->anoPublicacao . "<br>" . 
               "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
    }

    // Method to lend the book (if available)
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "Livro emprestado com sucesso!";
        } else {
            return "Livro não disponível para empréstimo.";
        }
    }

    // Method to return the book (set to available)
    public function devolver() {
        $this->disponivel = true;
        return "Livro devolvido com sucesso!";
    }

    // Method to check if the book is available
    public function estaDisponivel() {
        return $this->disponivel ? "Este livro está disponível para empréstimo." : "Este livro não está disponível.";
    }
}

// Test the class by creating two books and simulating a loan and return
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, true);
$livro2 = new Livro("1984", "George Orwell", 1949, true);

// Simulate lending and returning the books
echo $livro1->emprestar() . "<br>";
echo $livro1->estaDisponivel() . "<br>";
echo $livro1->devolver() . "<br>";
echo $livro1->estaDisponivel() . "<br>";

echo "<br>";

// Lending and returning the second book
echo $livro2->emprestar() . "<br>";
echo $livro2->estaDisponivel() . "<br>";
echo $livro2->devolver() . "<br>";
echo $livro2->estaDisponivel() . "<br>";
?>
