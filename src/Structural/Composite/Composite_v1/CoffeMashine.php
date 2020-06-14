<?php

namespace DesignPatterns\Stuctural\Composite_v1\Composite;

use DesignPatterns\Stuctural\Composite_v1\Composite\Components\ComponentInterface;

class CoffeMashine
{
    /**
     * Набор компонентов.
     *
     * @var []ComponentInterface
     */
    protected $units = [];

    public function add(ComponentInterface $component)
    {
        $this->units[] = $component;
    }

    /**
     * Готовим коффе.
     *
     * @return string
     */
    public function getCoffe(): string
    {
        $ingredients = [];

        foreach ($this->units as $component) {
            $ingredients[] = $component->get();
        }

        return implode(' + ', $ingredients);
    }
}