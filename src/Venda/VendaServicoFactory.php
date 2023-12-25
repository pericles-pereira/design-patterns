<?php 

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\Iss;

class VendaServicoFactory implements VendaFactory
{
    public function __construct(private string $nomePrestador)
    {
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}