<?php

namespace DesignPatterns\Registry;

/**
 * Описываем общий для всех продуктов интерфейс.
 */
interface ProductInterface
{
    public function getProductName(): string;
}