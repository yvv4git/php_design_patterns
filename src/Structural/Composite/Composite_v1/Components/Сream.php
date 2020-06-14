<?php

namespace DesignPatterns\Stuctural\Composite_v1\Composite\Components;

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