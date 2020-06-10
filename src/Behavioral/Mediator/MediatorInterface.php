<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Определяет интерфейс для обмена информацией с компонентами.
 * Обычно хватает одного метода для оповещения посредника о событиях, которые
 * произошли в компонентах.
 */
interface MediatorInterface
{
    public function notify($sender, $event, $data);
}