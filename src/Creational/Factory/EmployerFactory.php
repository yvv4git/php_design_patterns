<?php

namespace DesignPatterns\Factory;

class EmployerFactory
{
    /**
     * Фабрика.
     *
     * @param string $type
     * @return EmployerInterface
     */
    public function create(string $type): EmployerInterface 
    {
        switch ($type) {
            case 'user': return new User();
            case 'customer': return new Customer();
            case 'admin': return new Admin();
            default:
                throw new \Exception('Wrong user type passed.');
        }
    }
}