<?php 

namespace Alura\DesignPattern\Venda;

abstract class Venda 
{
    public function __construct(public \DateTimeInterface $dataRealizacao)
    {
    }
}