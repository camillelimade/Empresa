<?php 
class Fabricante{
    private $nome; 

    public function __construct($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}
class Produto{
    private $descricao;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $preco, $fabricante){
        // chamada em todos os momentos em que é gerada uma nova instancia
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }
    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais, da editora {$this->fabricante->getNome()}";
    }
    
}

$f1 = new Fabricante('Editora B');
$p1 = new Produto('Livro', 50, $f1); // uma nova instancia, que já ativa o método construtor
/*
var_dump($p1)
*/
// A função getDetalhes vai fazer ->> var_dump($p1) <<- isso de forma mais otimizada e ideal, logo chamamos ela com echo
echo $p1->getDetalhes();


?>