<?php

namespace Tests\Structural;

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\Ebook;
use DesignPatterns\Structural\Adapter\EbookAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $book = new Book();
        $this->assertSame('Открыть книгу.', $book->open());
        $this->assertSame('Переключаемся на следующую страницу.', $book->turnPage());
        
        $book = new EbookAdapter(new Ebook());
        $this->assertSame('Включить ebook.', $book->open());
        $this->assertSame('Нажали кнопку для перехода на следующую страницу.', $book->turnPage());
    }
}