<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Интерфейс субъекта.
 * Наблюдаемый(observable).
 */
interface ObservableInterface
{
    public function attach(ObserverInterface $instance): bool;

    public function detach(ObserverInterface $instance): void;

    public function notify(): void;

    public function getStatus(): int;
}