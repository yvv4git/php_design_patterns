<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Stuctural\Facade\Facade;
use DesignPatterns\Stuctural\Facade\Systems\Log;
use DesignPatterns\Stuctural\Facade\Systems\Bank;
use DesignPatterns\Stuctural\Facade\Systems\Client;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        // Инициализация.
        $bank = new Bank(999999.777);
        $client = new Client(500);
        $log = new Log();

        $facade = new Facade($bank, $client, $log);
        $facade->transfer(700);

        // проверка
        $this->assertSame(999299.777, $bank->getAmount());
        $this->assertSame(1200.0, $client->getAmount());
    }
}