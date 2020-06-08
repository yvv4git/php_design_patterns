<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Конкретная реализация абстрактного метода.
 */
class JSONResponse extends AbstractResponse
{
    public function createFormatter(): FormatterInterface
    {
        return new JSONFormatter();
    }
}