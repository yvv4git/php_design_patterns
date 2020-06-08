<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Behavioral\Command\TurnOnCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();
        $invoker->pushCommand(new TurnOnCommand($receiver, 'some_param'));
        $invoker->executeCommand();
        $invoker->pushCommand(new TurnOnCommand($receiver, 'kill', -9));
        $invoker->rollbackCommand();

        $this->assertTrue(true);
    }
}