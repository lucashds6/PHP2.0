<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco(cidade:'petrópolis', bairro:'bairro Teste', rua:'Rua lá', numero:'37')
    ),
    tipo: 2
);
$conta->deposita(valorADepositar: 500);
$conta->saca(valorASacar: 100);

echo $conta->recuperaSaldo();
?>