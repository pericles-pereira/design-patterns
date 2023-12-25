<?php 

namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{
    public function __construct(private string $caminhoArquivo)
    {
    }

    protected function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}
