<?php
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function exibirLeitor() {
        return "Nome: " . $this->nome . "<br>" . 
               "Email: " . $this->email . "<br>" . 
               "Telefone: " . $this->telefone . "<br>";
    }
}

// Test the class by creating a reader and displaying their data
$leitor1 = new Leitor("Carlos Souza", "carlos@email.com", "123456789");
echo $leitor1->exibirLeitor();
?>
