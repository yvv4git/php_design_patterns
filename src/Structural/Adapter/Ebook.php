<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Класс E-book не соответствует интерфейсу книг. Нам надо как-то адаптировать
 * его к интерфейсу книг!
 */
class Ebook
{
    public function turnOn(): string
    {
        return 'Включить ebook.';
    }
    
    
    public function pressNextButton(): string
    {
        return 'Нажали кнопку для перехода на следующую страницу.';
    }
}