<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class IOSBuilder extends AbstractBuilder
{
    protected function deploy(): void
    {
        $this->product[] = 'Деплоим iOS приложение!';
    }
}