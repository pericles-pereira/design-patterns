<?php 

namespace Alura\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    protected function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}
