<?php

namespace DesignPatterns\Creational\FactoryMethod;

class JSONFormatter implements FormatterInterface
{
    public function wrapData(string $data): string
    {
        return '{"code": 200, "response": "' . $data . '"}';
    }
}