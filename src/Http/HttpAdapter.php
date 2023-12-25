<?php 

namespace Alura\DesignPattern;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}