<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Абстрактный класс, определяющий, как должен быть реализован класс.
 */
abstract class Builder
{
    /**
     * @var Product
     */
    protected $product;


    /**
     * Возвращает созданный продукт
     *
     * @return Product
     */
    final public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct(): void
    {
        $this->product = new Product();
    }
}