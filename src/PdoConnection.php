<?php 

namespace Alura\DesignPattern;

class PdoConnection extends \PDO 
{
    private static ?self $instancia = null;

    private function __construct($dns, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dns, $username, $passwd, $options);
    }

    public static function getInstance($dns, $username = null, $passwd = null, $options = null): self
    {
        if(is_null(self::$instancia)) {
            self::$instancia = new static($dns, $username, $passwd, $options);
        }

        return self::$instancia;
    }
}
