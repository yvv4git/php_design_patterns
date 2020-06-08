<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Абстрактная фабрика
 */
abstract class AbstractFactory
{

    /**
     * Возвращает фабрику
     *
     * @return AbstractFactory - дочерний объект
     * @throws Exception
     */
    public static function getFactory()
    {
        switch (Config::$factory) {
            case 1:
                return new FirstFactory();
            case 2:
                return new SecondFactory();
        }
        throw new \Exception('Bad config');
    }

    /**
     * Возвращает продукт.
     * Абстрактный метод.
     *
     * @return Product
     */
    abstract public function getProduct();
}