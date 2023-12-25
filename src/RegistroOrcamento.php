<?php 

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;

class RegistroOrcamento
{
    public function __construct(private HttpAdapter $http)
    {
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
        }

        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens
        ]);
    }
}
