<?php

namespace Tests\Creational;

use DesignPatterns\Creational\Factory\Customer;
use DesignPatterns\Creational\Factory\EmployerFactory;
use DesignPatterns\Creational\Factory\User;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

class FactoryTest extends TestCase
{
    /**
     * Храним фабрику.
     *
     * @var EmployerFactory
     */
    private static $employerFactory;

    /**
     * Настраиваем статическую переменную, общую для всех тестов.
     *
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        self::$employerFactory = new employerFactory();
    }

    public function testUserCreate()
    {
        $userObj = self::$employerFactory->create('user');
        
        //$this->assertInstanceOf(User::class, $userObj);
        $this->assertSame('Vladimir', $userObj->getName());
    }

    public function testCustomer()
    {
        $customerObj = self::$employerFactory->create('customer');
        
        //$this->assertInstanceOf(Customer::class, $customerObj);
        $this->assertSame('Olly', $customerObj->getName());
    }

    public function testAdmin()
    {
        $adminObj = self::$employerFactory->create('admin');

        //$this->assertInstanceOf(Admin::class, $adminObj);
        $this->assertSame('Ully', $adminObj->getName());
    }
};