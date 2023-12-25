<?php 

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    public function __construct(public \DateTimeInterface $dataRealizacao, private int $pesoProduto)
    {
    }
}