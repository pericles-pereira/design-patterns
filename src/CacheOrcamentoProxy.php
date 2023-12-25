<?php 

namespace Alura\DesignPattern;

class CacheOrcamentoProxy implements Orcavel
{
    private float $valorCache = 0;

    public function __construct(private Orcamento $orcamento)
    {
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException('Não é possível adicionar item a orçamento cacheado');
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}