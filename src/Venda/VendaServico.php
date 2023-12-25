<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    public function __construct(public \DateTimeInterface $dataRealizacao, private string $nomePrestador)
    {
    }
}