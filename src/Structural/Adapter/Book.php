<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Имплементирует интерфейс книг.
 * @class Book
 */
class Book implements BookInterface
{
    /**
     * @return string
     */
    public function open(): string
    {
        return 'Открыть книгу.';
    }

    /**
     * @return string
     */
    public function turnPage(): string
    {
        return 'Переключаемся на следующую страницу.';
    }
}