<?php

namespace DesignPatterns\Creational\Registry;

/**
 * Описываем общий для всех продуктов интерфейс.
 */
interface ProductInterface
{
    public function getProductName(): string;
}