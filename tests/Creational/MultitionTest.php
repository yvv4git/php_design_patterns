<?php

namespace Tests\Creational;

use DesignPatterns\Creational\Multition\FileLogger;
use DesignPatterns\Creational\Multition\Logger;
use DesignPatterns\Creational\Multition\StdoutLogger;
use PHPUnit\Framework\TestCase;

class MultitionTest extends TestCase
{
    public function testMultition()
    {
        // Logger будет отдавть один и тот же инстанс.
        // Это как singletone, но для нескольких объектов.
        $fileLogger = Logger::getInstance('File');
        $stdoutLogger = Logger::getInstance('Stdout');

        $fileLogger->log('Save log to file');
        $stdoutLogger->log('Print log in console');

        $this->assertInstanceOf(FileLogger::class, $fileLogger);
        $this->assertInstanceOf(StdoutLogger::class, $stdoutLogger);
    }
}