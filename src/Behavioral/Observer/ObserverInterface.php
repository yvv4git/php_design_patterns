<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Интерфейс наблюдателя.
 * Он наблюдает.
 * Наблюдатель(observer) подписывается на события наблюдаемого(observable) объекта.
 */
interface ObserverInterface
{
    public function update(ObservableInterface $instance);
}
