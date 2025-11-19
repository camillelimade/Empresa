<?php 
class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agencia Bancária: {$this->agencia} | Conta: {$this->conta} | Saldo atual: {$this->saldo}";
    }
    public function depositar($valor){
        if($valor > 0):
        $this->saldo += $valor;
        echo "Depósito de: {$valor} | Saldo atual: {$this->saldo} <br>";
        else:
            echo "O valor mínimo a ser depositado é 1 real";
        endif;
    }
}
// Aqui instanciamos uma nova conta
// --- $c1 = new Conta(100, 2586, 5000);
// Aqui aplicamos um deposito chamando a função depositar();
$c1->depositar(1500);
// Aqui chamamos e exibimos o resultado da função que exibe o valor dos atributos da nossa instancia
echo $c1->getDetalhes();

/*Esse é um exemplo básico de Classe de conta bancária com orientação de objetos, porém é de se levar enconta suas variações no mundo real, e graças a orientação a objetos isso se torna possível por meio do conceito de herança*/
// A seguir utilizaremos o conceito de herança ao criar a classe Poupança:

class Poupanca extends Conta{
    protected $limite;
 // Com uma classe que possui herança de outra, Poupança tem em si as mesmas funções e atributos de sua "Classe Mãe"
 /* Tudo isso com a funcionalidade de modificar ou não as funções, fornecendo dinamismo e reutilização de 
 códigos sem redundancia ou inconsistencias */
 public function Saque($valor){
    if($this->saldo >= $valor):
        $this->saldo -= $valor;
        echo "Saque de: {$valor} | Saldo atual: {$this->saldo} <br>";
    else: 
        echo "Saque não autorizado de {$valor}| Saldo insuficiente: {$this->saldo} <br>";
    endif;
 }
}

class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

     public function Saque($valor){
    if(($this->saldo + $this->limite) >= $valor):
        $this->saldo -= $valor;
        echo "Saque de: {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite}<br>";
    else: 
        echo "Saque não autorizado de {$valor}| Saldo insuficiente: {$this->saldo} <br>";
    endif;
 }
}


// $c2 = new Poupanca(100, 2586, 5000);
 $c2 = new Corrente(100, 2586, 5000, 500);
