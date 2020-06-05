<?php

namespace DesignPatterns\ObjectPool;

class Product implements ProductInterface
{
    /**
     * ID продукта.
     *
     * @var int
     */
    private $id;

    /**
     * ID продукта задается в конструкторе.
     *
     * @param integer $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Возвращаем собственный id.
     *
     * @return integer
     */
    public function getID(): int
    {
        return $this->id;
    }
}