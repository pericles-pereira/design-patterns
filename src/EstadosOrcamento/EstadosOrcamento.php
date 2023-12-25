<?php 

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use DomainException;

abstract class EstadosOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new DomainException(
            'Este orçamento não pode ser aprovado'
        );
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new DomainException(
            'Este orçamento não pode ser reprovado'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new DomainException(
            'Este orçamento não pode ser finalizado'
        );
    }
}
