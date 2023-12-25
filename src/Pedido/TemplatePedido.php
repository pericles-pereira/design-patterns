<?php 

namespace Alura\DesignPattern\Pedido;

class TemplatePedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizado;

    public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizado = $dataFinalizacao;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFinalizado(): \DateTimeInterface
    {
        return $this->dataFinalizado;
    }
}