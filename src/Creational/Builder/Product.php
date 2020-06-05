<?php

namespace DesignPatterns\Builder;

/**
 * Какой-то продукт.
 */
class Product
{

    /**
     * @var string
     */
    private $name;


    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}