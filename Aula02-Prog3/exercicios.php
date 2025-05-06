<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma Classe</title>
</head>
<body>

<?php   
class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    // Método para exibir informações formatadas em HTML
    public function exibirInformacoes() {
        echo "<strong>Nome:</strong> {$this->nome}<br>";
        echo "<strong>Preço:</strong> {$this->preco}<br>";
        echo "<strong>Quantidade:</strong> {$this->quantidade}<br><br>";
    }
}

// Criando os objetos
$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.5;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Lápis";
$produto2->preco = 1.5;
$produto2->quantidade = 20;

// Exibindo informações
$produto1->exibirInformacoes();
$produto2->exibirInformacoes();

// Função para calcular a média dos preços
function mostrarMediaPrecos($produto1, $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "<strong>A média dos preços dos produtos é:</strong> {$media}<br>";
}

// Chamando a função
mostrarMediaPrecos($produto1, $produto2);
?>

</body>
</html>

