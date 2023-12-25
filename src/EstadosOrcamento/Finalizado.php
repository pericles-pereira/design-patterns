<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use DomainException;
use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Orçamentos reprovados e finalizados não podem receber desconto.'
        );
    }
}
