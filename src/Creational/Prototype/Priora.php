<?php

namespace DesignPatterns\Creational\Prototype;

class Priora implements CarInterface
{
    private $name = 'Priora';

    /**
     * Получить название машины.
     *
     * @return string
     */
    public function getCarName(): string
    {
        return $this->name;
    }

    /**
     * Установить название у машины.
     *
     * @param string $name
     * @return void
     */
    public function setCarName(string $name): void
    {
        $this->name = $name;
    }
}