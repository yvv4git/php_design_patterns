<?php

namespace DesignPatterns\Creational\LazyInitialization;

/**
 * Есть фабрика, которая умеет возвращать продукты.
 */
class Factory
{

    /**
     * @var Product
     */
    protected $firstProduct;

    /**
     * @var Product
     */
    protected $secondProduct;


    /**
     * Возвращает продукт.
     * 1. Проверяет, не инициализирован ли продукт.
     * 2. Инициализирует продукт.
     * 3. Возвращает продукт во вне.
     *
     * @return Product
     */
    public function getFirstProduct()
    {

        if (!$this->firstProduct) {
            $this->firstProduct = new FirstProduct();
        }
        return $this->firstProduct;
    }

    /**
     * Возвращает продукт.
     * 1. Проверяет, не инициализирован ли продукт.
     * 2. Инициализирует продукт.
     * 3. Возвращает продукт во вне.
     *
     * @return Product
     */
    public function getSecondProduct()
    {

        if (!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }
        return $this->secondProduct;
    }
}