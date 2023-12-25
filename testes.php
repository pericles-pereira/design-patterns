<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\{Icms, Icpp, Ikcv, Iss,};
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->quantidadeItens = 1;

echo $calculadora->calcula($orcamento, new Icms(new Ikcv(new Iss(new Icpp()))));

/*
$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);
*/
