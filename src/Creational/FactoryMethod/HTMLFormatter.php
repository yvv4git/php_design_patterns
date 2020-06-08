<?php

namespace DesignPatterns\Creational\FactoryMethod;

class HTMLFormatter implements FormatterInterface
{
    public function wrapData(string $data): string
    {
        return '<html>' . $data . '</html>';
    }
}