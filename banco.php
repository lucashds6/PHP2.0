<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta(cpfTitular: '123.456.789-10',nomeTitular: 'Vinicius Dias');
$primeiraConta->deposita(valorADepositar:500);
$primeiraConta->saca(valorASacar:300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$segundaConta = new Conta(cpfTitular: '698.549.548-10', nomeTitular: 'Patricia');
var_dump($segundaConta);

$outra = new Conta(cpfTitular:'123', nomeTitular:'abcdefg');
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
?>