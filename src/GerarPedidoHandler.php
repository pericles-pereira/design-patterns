<?php 

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DateTimeImmutable;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido */
    private array $acoesAposGerarPedido;

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao): void
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->numeroItens;
        $orcamento->valor = $gerarPedido->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizado = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->nomeCliente;
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
