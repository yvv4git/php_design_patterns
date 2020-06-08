<?php

namespace DesignPatterns\Creational\Factory;

/**
 * Конкретная реализация интерфейса EmployerInterface.
 */
final class Customer implements EmployerInterface
{
    private const CUSTOMER_NAME = 'Olly';

    /**
     * Вернуть имя у Customer.
     *
     * @return string
     */
    public function getName(): string
    {
        return self::CUSTOMER_NAME;
    }
}