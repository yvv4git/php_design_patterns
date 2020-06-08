<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Конкретная реализация абстрактного метода.
 */
class HTMLResponse extends AbstractResponse
{
    public function createFormatter(): FormatterInterface
    {
        return new HTMLFormatter();
    }
}