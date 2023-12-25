<?php

use Alura\DesignPattern\CurlHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\ReactPHPHttpAdapter;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
