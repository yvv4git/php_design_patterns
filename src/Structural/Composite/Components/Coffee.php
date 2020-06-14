<?php

namespace DesignPatterns\Stuctural\Composite\Components;

class Coffee implements ComponentInterface
{
    /**
     * Компонент - коффе.
     *
     * @return string
     */
    public function get(): string
    {
        return 'кофе';
    }
}