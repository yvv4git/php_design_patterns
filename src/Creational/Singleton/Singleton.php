<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

/**
 * Порождающий паттерн.
 * Одиночка / Singleton.
 *
 * Обрати внимание, перед классом стоит final. Это означает, что данный
 * класс нельзя унаследовать. Еслиб стояло перед методами, то нельзя было бы
 * изменить методы.
 */
final class Singleton
{
    /**
     * @var self
     */
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // блокируем методы
    private function __construc(){}
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}