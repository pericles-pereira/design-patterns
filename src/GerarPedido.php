<?php 

namespace Alura\DesignPattern;

class GerarPedido
{
    public function __construct(
        public readonly float $valorOrcamento,
        public readonly int $numeroItens,
        public readonly string $nomeCliente
    ) {}
}
