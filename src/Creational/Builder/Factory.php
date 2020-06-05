<?php

namespace DesignPatterns\Builder;

/**
 * Какая-то фабрика
 * Возможно, фабрика здесь используется в качестве шефа, который определяет,
 * какой строитель будет заниматься задачей.
 */
class Factory
{

    /**
     * @var Builder
     */
    private $builder;


    /**
     * Factory - это шеф. 
     * 1.Шеф выбирает строителя.
     * 2.Строитель начинает строить.
     * 
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
        $this->builder->buildProduct();
    }

    /**
     * Возвращает созданный продукт.
     * Строитель передает продукт, который он сделал.
     *
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->builder->getProduct();
    }
}