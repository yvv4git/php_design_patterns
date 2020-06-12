<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Интерфейс для книг.
 */
interface BookInterface
{
    public function open(): string;
    public function turnPage(): string;
}