<?php
// Classe abstrata Produto
abstract class Produto {
    private $codigo;
    private $preco;
    // Método construtor da classe Produto
    function __construct($codigo, $preco) {
        $this->codigo = $codigo;
        $this->preco = $preco;
    }
    // Métodos getters e setters (para acessar os atributos privados da classe Produto)
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setPreco() {
        $this->preco = $preco;
    }

    function getPreco() {
        return $this->preco;
    }
}

// Interface iPerecivel: Assina os métodos que devem ser implementados
interface iPerecivel {
    function estaVencido($dataValidade);
}

// Classe DVD herdando da classe Produto
class DVD extends Produto {
    private $titulo;
    private $ano;
    // Método construtor da classe DVD
    function __construct($codigo, $preco, $titulo, $ano) {
        parent::__construct($codigo, $preco);
        $this->titulo = $titulo;
        $this->ano = $ano;
    }
    // Métodos getters e setters (para acessar os atributos privados da classe DVD)
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function getAno() {
        return $this->ano;
    }
}

// Classe Leite herdando da classe Produto e implementando a interface iPerecivel
class Leite extends Produto implements iPerecivel {
    private $marca;
    private $volume;
    private $dataValidade;
    // Método construtor da classe Leite
    function __construct($codigo, $preco, $marca, $volume, $dataValidade) {
        parent::__construct($codigo, $preco);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }
    // Métodos getters e setters (para acessar os atributos privados da classe Leite)
    function setTitulo($marca) {
        $this->marca = $marca;
    }
    function getmarca() {
        return $this->marca;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function getVolume() {
        return $this->volume;
    }
    function setDataValidade($dataValidade) {
        $this->dataValidade = $dataValidade;
    }

    function getDataValidade() {
        return $this->dataValidade;
    }

    // Método da interface iPerecivel
    function estaVencido($dataValidade) {
        if($this->dataValidade < date('d/m/Y')){
            echo "O leite {$this->marca} está vencido. <br />";
        } else {
            echo "O leite {$this->marca} está no prazo. <br />";
        }
    }
}

// Criando objetos DVD (instanciando a classe DVD e setando os valores)
$dvd1 = new DVD("001", 10.99, "Titulo 001", 1990);
$dvd2 = new DVD("002", 15.95, "Titulo 002", 1995);
$dvd3 = new DVD("003", 9.25, "Titulo 003", 1998);
$dvd4 = new DVD("004", 12.65, "Titulo 00", 2000);

// Criando objetos Leite (instanciando a classe Leite e setando os valores)
$leite1 = new Leite("005", 2.99, "Parmalat", "1 Lt", "10/10/2019");
$leite2 = new Leite("006", 2.55, "Piracanjuba", "1 Lt", "01/09/2019");
$leite3 = new Leite("007", 3.05, "Batavo", "1 Lt", "21/01/2020");
$leite4 = new Leite("008", 4.55, "Itambé", "1 Lt", "31/02/2020");
$leite5 = new Leite("009", 2.75, "Nestle", "1 Lt", "05/06/2019");
$leite6 = new Leite("010", 2.68, "BH", "1 Lt", "15/03/2017");
// Criando array com os dados dos produtos
$estoque = array(
    $dvd1->getCodigo() => array($dvd1->getTitulo(),$dvd1->getAno(),$dvd1->getPreco()),
    $dvd2->getCodigo() => array($dvd2->getTitulo(),$dvd2->getAno(),$dvd2->getPreco()),
    $dvd3->getCodigo() => array($dvd3->getTitulo(),$dvd3->getAno(),$dvd3->getPreco()),
    $dvd4->getCodigo() => array($dvd4->getTitulo(),$dvd4->getAno(),$dvd4->getPreco()),
    $leite1->getCodigo() => array($leite1->getMarca(),$leite1->getVolume(),$leite1->getDataValidade(),$leite2->getPreco()),
    $leite2->getCodigo() => array($leite2->getMarca(),$leite2->getVolume(),$leite2->getDataValidade(),$leite4->getPreco()),
    $leite3->getCodigo() => array($leite3->getMarca(),$leite3->getVolume(),$leite3->getDataValidade(),$leite1->getPreco()),
    $leite4->getCodigo() => array($leite4->getMarca(),$leite4->getVolume(),$leite4->getDataValidade(),$leite3->getPreco()),
    $leite5->getCodigo() => array($leite5->getMarca(),$leite5->getVolume(),$leite5->getDataValidade(),$leite5->getPreco()),
    $leite6->getCodigo() => array($leite6->getMarca(),$leite6->getVolume(),$leite6->getDataValidade(),$leite6->getPreco())
);

// Verificando a data de validade
$leite1->estaVencido($leite1->getDataValidade());
$leite2->estaVencido($leite2->getDataValidade());
$leite3->estaVencido($leite3->getDataValidade());
$leite4->estaVencido($leite4->getDataValidade());
$leite5->estaVencido($leite5->getDataValidade());
$leite6->estaVencido($leite6->getDataValidade());

// Função para exibir as informações do array
var_dump($estoque);

?>