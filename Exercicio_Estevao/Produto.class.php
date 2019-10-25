<?php
// Classe Fabricante
class Fabricante {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}


// Classe Produto
class Produto {
    private $codigo;
    private $preco;
    private $fabricante;

    public function __construct($codigo, $preco, Fabricante $fabricante) {
        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDetalhes() {
        return "O produto de código {$this->codigo} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
    }

}

$f1 = new Fabricante("Fabricante TESTE 2");
$p1 = new Produto(123456, 10.99, $f1);

// var_dump($p1);
echo $p1->getDetalhes();
