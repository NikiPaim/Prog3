<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
        $this->leitorAtual = null; // Inicialmente sem leitor
    }

    public function emprestar($leitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $leitor->getNome();
            return "Livro emprestado com sucesso para " . $this->leitorAtual . "!";
        } else {
            return "Livro não disponível para empréstimo.";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        $this->leitorAtual = null;
        return "Livro devolvido com sucesso!";
    }

    public function quemPegou() {
        return $this->leitorAtual ? "O livro foi emprestado para " . $this->leitorAtual : "O livro não foi emprestado.";
    }
}

class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function exibirLeitor() {
        return "Nome: " . $this->nome . "<br>" . "Email: " . $this->email . "<br>" . "Telefone: " . $this->telefone . "<br>";
    }
}

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, true);
$leitor1 = new Leitor("Carlos Souza", "carlos@email.com", "123456789");

echo $livro1->emprestar($leitor1) . "<br>";
echo $livro1->quemPegou() . "<br>";

$livro1->devolver();
echo $livro1->quemPegou() . "<br>";
?>
