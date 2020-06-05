<?php

namespace DesignPatterns\Factory;

/**
 * Конкретная реализация интерфейса EmployerInterface.
 */
final class User implements EmployerInterface
{
    private const MY_NAME = 'Vladimir';

    /**
     * Вернуть имя у User.
     *
     * @return string
     */
    public function getName(): string
    {
        return self::MY_NAME;
    }
}