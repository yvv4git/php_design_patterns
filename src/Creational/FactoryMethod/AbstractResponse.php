<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class AbstractResponse
{
    protected $data;

    public function __construct(string $data)
    {
        $formatter = $this->createFormatter();
        $this->data = $formatter->wrapData($data);
    }

    /**
     * Factory Method, usually abstract
     * but it can also return a certain standard product (formatter)
     */
    abstract function createFormatter(): FormatterInterface;

    public function __toString(): string
    {
        return $this->data;
    }
}