<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\ChainOfCommands\DbLogger;
use DesignPatterns\Behavioral\ChainOfCommands\FileLogger;
use DesignPatterns\Behavioral\ChainOfCommands\MailLogger;
use PHPUnit\Framework\TestCase;

class ChainOfCommandsTest extends TestCase
{
    public function testChainOfCommands()
    {
        $logger = new DbLogger;
        $this->assertInstanceOf(DbLogger::class, $logger);

        // Устанавливаем несколько обработчиков.
        $logger->setNext(new MailLogger)->setNext(new FileLogger);
        $logger->handle('Message text');
    }
}
