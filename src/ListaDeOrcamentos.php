<?php

namespace Alura\DesignPattern;

use Traversable;
use ArrayIterator;
use IteratorAggregate;
use Alura\DesignPattern\EstadosOrcamento\Finalizado;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamentos[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }
    
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}
