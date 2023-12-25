<?php

use Alura\DesignPattern\Log\{StdoutLogManager, FileLogManager};

require 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/log.md');
$logManager->log('info', 'testandoLogManager');