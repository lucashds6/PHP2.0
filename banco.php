<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular(new CPF(numero:'123.456.789-10'), nome:'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(valorADepositar:500);
$primeiraConta->saca(valorASacar:300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular (new CPF(numero:'698.549.548-10'), nome:'Patricia');
$segundaConta = new conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular (new CPF (numero:'123.634.345-23'), nome:'abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
?>