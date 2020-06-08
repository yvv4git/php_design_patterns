<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Второй строитель
 */
class SecondBuilder extends Builder
{

    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct(): void
    {
        parent::buildProduct();
        $this->product->setName('The product of second builder');
    }
}