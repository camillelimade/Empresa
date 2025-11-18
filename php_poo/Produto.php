<?php 
// EXEMPLO 1
// A classe é a estrutura do nosso objeto
class Produto{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco){
        // chamada em todos os momentos em que é gerada uma nova instancia
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais";
    }
    public function setDescricao($valor){
        $this->descricao = $valor;
    }
    // métodos Set carregam parametros para atualizar ou inserir
    public function getDescricao(){
        // retorna a resultado inserido pela função de cima
        return $this->descricao;
    }
    public function setPreco($valor){
        $this->preco = $valor;
    }
}



/*
- Abaixo instanciamos um objeto na variavel $p1
    $p1 = new Produto;
    $p1-> descricao = 'Livro';
    $p1-> preco = 50;
*/

// Abaixo fazemos isso após criar e usando as função Get e Set

/* 
- Isso ainda é possível fazer em uma só linha com o método construtor da classe 
    $p1 = new Produto;
    $p1->setDescricao('Livro');
    $p1->setPreco(50);
*/

$p1 = new Produto('Livro', 50); // uma nova instancia, que já ativa o método construtor
var_dump($p1)
// A função getDetalhes vai fazer ->> var_dump($p1) <<- isso de forma mais otimizada e ideal, logo chamamos ela com echo




?>