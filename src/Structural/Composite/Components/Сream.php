<?php

namespace DesignPatterns\Stuctural\Composite\Components;

class Сream implements ComponentInterface
{
    /**
     * Компонент - сливки.
     *
     * @return string
     */
    public function get(): string
    {
        return 'сливки';
    }
}