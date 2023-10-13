<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco(cidade:'Petrópolis', bairro:'um bairro', rua:'minha rua', numero:'71b');
$vinicius = new Titular(new CPF(numero:'123.456.789-10'), nome:'Vinicius Dias',endereco: $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(valorADepositar:500);
$primeiraConta->saca(valorASacar:300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular (new CPF(numero:'698.549.548-10'), nome:'Patricia', endereco: $endereco);
$segundaConta = new conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco(cidade:'A', bairro:'b', rua:'c', numero:'1D');
$outra = new Conta(new Titular(new CPF (numero:'123.654.789-01'), nome:'abcdefg', endereco: $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
?>