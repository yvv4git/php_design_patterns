<?php

namespace DesignPatterns\Multition;

/**
 * Класс, реализующий паттерн multition.
 */
class Logger
{
    private static $instances = array();

    /**
     * Получить инстанс.
     *
     * @param string $key
     * @return void
     */
    public static function getInstance(string $key): LoggerInterface
    {
        if (!array_key_exists($key, self::$instances)) {
            $className = $key . 'Logger';
            
            // Если действовать таким способом, то почему-то не видит класс.
            //self::$instances[$key] = new $className;
            switch ($className) {
                case 'FileLogger':
                    self::$instances[$key] = new FileLogger;
                break;
                case 'StdoutLogger':
                    self::$instances[$key] = new StdoutLogger;
                break;
                default:
                    throw new \Exception("Unknown logger type");
            }
        }

        return self::$instances[$key];
    }

    // prevent creating multiple instances due to "private" constructor
    private function __construct(){}

    // prevent the instance from being cloned
    private function __clone(){}

    // prevent from being unserialized
    private function __wakeup(){}
}
