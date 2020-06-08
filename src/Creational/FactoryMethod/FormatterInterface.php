<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface FormatterInterface
{
    public function wrapData(string $data): string;
}