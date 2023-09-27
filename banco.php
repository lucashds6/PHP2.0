<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(valorADepositar:500);
$primeiraConta->saca(valorASacar:300);
$primeiraConta->defineCpfTitular(cpf: '123.456.789-10');
$primeiraConta->defineNomeTitular(nome: 'Vinicius Dias');

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

?>