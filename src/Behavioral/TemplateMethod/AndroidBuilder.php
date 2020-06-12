<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Конкретный класс переопределяет детали шаблонного метода.
 */
class AndroidBuilder extends AbstractBuilder
{
    protected function deploy(): void
    {
        $this->product[] = 'Деплоим Android приложение!';
    }
}