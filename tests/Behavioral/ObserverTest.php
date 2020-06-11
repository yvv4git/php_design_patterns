<?php

namespace Tests\Behavioral;

use DesignPatterns\Behavioral\Observer\Logger;
use DesignPatterns\Behavioral\Observer\Mailer;
use DesignPatterns\Behavioral\Observer\Comment;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $comment = new Comment();
        $comment->attach(new Logger);
        $comment->attach(new Mailer);

        $this->assertTrue($comment->save());
    }
}