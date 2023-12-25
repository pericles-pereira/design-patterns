<?php 

namespace Alura\DesignPattern;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_PUT, $data);

        curl_exec($curl);
    }
}