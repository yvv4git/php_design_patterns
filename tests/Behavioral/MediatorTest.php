<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\Mediator\ChatMediator;
use DesignPatterns\Behavioral\Mediator\UserComponent;
use DesignPatterns\Behavioral\Mediator\BotComponent;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediator()
    {
        $expected = [
            0 => 'Владимир: Привет!',
            1 => 'Девид Блайн: Как дела?',
            2 => 'User Владимир was banned by Bot',
        ];

        $chat = new ChatMediator;
        $vladimir = new UserComponent('Владимир', $chat);
        $david = new UserComponent('Девид Блайн', $chat);
    
        $bot = new BotComponent($chat);
        $vladimir->sendMessage("Привет!");
        $david->sendMessage("Как дела?");
        $bot->banUser($vladimir);

        $this->assertSame($expected, $chat->getChatBuffer());
    }
}