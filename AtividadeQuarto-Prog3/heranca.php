<?php
// Classe base Quarto
class Quarto {
    protected $numero; // Número do quarto
    protected $preco;  // Preço do quarto

    // Construtor recebe o número do quarto
    public function __construct($num) {
        $this->numero = $num;
    }

    // Retorna o número do quarto
    public function getNumero() {
        return $this->numero;
    }
}

// Classe Standard herda de Quarto
class Standard extends Quarto {
    public function getPreco() {
        return $this->preco = 300.00;
    }
}

// Classe Deluxe herda de Quarto
class Deluxe extends Quarto {
    public function getPreco($hospedes = 2) {
        if ($hospedes > 2) {
            return $this->preco = (300.00 * 1.2) * 1.1;
        } else {
            return $this->preco = 300.00 * 1.2;
        }
    }
}

// Classe Suite herda de Quarto
class Suite extends Quarto {
    public function getPreco($dia = 1) {
        if ($dia >= 2 && $dia <= 6) {
            return $this->preco = 300.00 * 1.5;
        } else {
            return $this->preco = (300.00 * 1.5) * 1.5;
        }
    }
}

// Instanciando os objetos
$std = new Standard(101);
echo "Hospede - Quarto: " . $std->getNumero() . " Valor R$ " . $std->getPreco() . "<br>";

$duplo = new Deluxe(102);
echo "Hospede - Quarto: " . $duplo->getNumero() . " Valor R$ " . $duplo->getPreco(3) . "<br>";

$suite = new Suite(103);
echo "Hospede - Quarto: " . $suite->getNumero() . " Valor R$ " . $suite->getPreco(7) . "<br>";

?>