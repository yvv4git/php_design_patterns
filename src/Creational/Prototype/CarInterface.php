<?php

namespace DesignPatterns\Prototype;

/**
 * Описание, общее для всех продуктов.
 */
interface CarInterface
{
    public function getCarName(): string;
    public function setCarName(string $name): void;
}