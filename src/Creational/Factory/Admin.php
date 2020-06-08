<?php

namespace DesignPatterns\Creational\Factory;

final class Admin implements EmployerInterface
{
    private const ROOT_NAME = 'Ully';

    /**
     * Вернуть имя у Admin.
     *
     * @return string
     */
    public function getName(): string
    {
        return self::ROOT_NAME;
    }
}