<?php
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        $resultado = "Livros na Biblioteca: <br>";
        foreach ($this->livros as $livro) {
            $resultado .= $livro->exibirInformacoes() . "<br>";
        }
        return $resultado;
    }

    public function listarLeitores() {
        $resultado = "Leitores Cadastrados: <br>";
        foreach ($this->leitores as $leitor) {
            $resultado .= $leitor->exibirLeitor() . "<br>";
        }
        return $resultado;
    }
}

// Test the class
$biblioteca = new Biblioteca("Biblioteca Central");
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, true);
$leitor1 = new Leitor("Carlos Souza", "carlos@email.com", "123456789");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLeitor($leitor1);

echo $biblioteca->listarLivros();
echo $biblioteca->listarLeitores();
?>
