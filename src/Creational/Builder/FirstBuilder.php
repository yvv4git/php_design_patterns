<?php

namespace DesignPatterns\Builder;

/**
 * Первый строитель
 */
class FirstBuilder extends Builder
{

    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct(): void
    {
        parent::buildProduct();
        $this->product->setName('The product of the first builder');
    }
}