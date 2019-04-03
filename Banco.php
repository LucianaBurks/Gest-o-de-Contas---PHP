<?php
class Banco{
    var $nomecliente = ""; 
    var $numeroconta = ""; 
    var $saldo = ""; 
    function __construct() {
        $this -> nome = null;
        $this -> conta = null;
        $this -> valor = 0;
    }
    function CriarConta($nome,$conta,$valor = 0) {
        $this -> nome = $nome;
        $this -> conta = $conta;
        $this -> valor = $valor;
    }
    function Depositar($conta, $valor) {
        if ($this -> conta == $conta) {
            $this -> valor = $this -> valor + $valor;
            echo "Depósito Efetuado Com Sucesso! ";
        }
        else
            echo "Houve um erro ao solicitar o saque, reveja as informações digitadas ";
    }
    function Saque($conta, $valor) {
        if ($this -> conta == $conta) {
            if ($valor > $this -> valor) {  
                echo "Saldo Insuficiente. ";
            }  
            else
            {
                $this -> valor = $this -> valor - $valor;
                echo "Saque Efetuado Com Sucesso!</br>";
            }
        }
        else   {
            echo "Houve um erro ao solicitar o saque, reveja as informações digitadas ";
        }
    }
    function Mostra() {
        echo "<br>--------------------------------------------------<br>";
        echo "<br>Informações do Cliente:<br> ";
        echo "Nome: " . $this-> nome . "<br>";
        echo "Conta: " . $this-> conta . "<br>";
        echo "Saldo: R$ " . $this-> valor . "<br>";
        echo "<br>--------------------------------------------------<br>";
    }
}
//Teste banco 
$bancoteste = new Banco();
$bancoteste -> Mostra();
echo "<br>Criar Conta<br> ";
$bancoteste -> CriarConta("Marina ","88054620",500);
$bancoteste -> Mostra();
echo "<br> Conta criada! <br>";
//Teste Saque 
echo "<br>Fazer Saque de R$ 300 <br>";
$bancoteste -> Saque("88054620",300);
echo "<br> Fim teste saldo 1 <br>";
echo "<br>Fazer Saque de R$ 150<br>";
$bancoteste -> Saque("88054620",150);
$bancoteste -> Mostra();
echo "<br> Fim teste saldo 2 <br>";
//Teste saldo insuficiente 
echo "<br> Fazer Saque de R$ 500 <br>";
$bancoteste -> Saque("88054620",500);
$bancoteste -> Mostra();
echo"<br> Fim teste saldo 3 <br>";

//Teste erro 
echo "<br>Fazer Depósito Com Numero da Conta Errado<br>";
$bancoteste -> Depositar("011-1407",234);
echo "<br> Fim teste Depósito 1<br>";
//Teste ok 
echo "<br>Faz Depósito Com Numero da Conta Certo<br>";
$bancoteste -> Depositar("88054620",234);
$bancoteste -> Mostra();
echo "<br> Fim teste Depósito 2<br>";
?>
