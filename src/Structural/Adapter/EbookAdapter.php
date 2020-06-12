<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Класс - адаптер.
 * Его задача - адаптировать класс Kindle к интерфейсу Book.
 * @class EbookAdapter
 */
class EbookAdapter implements BookInterface
{
    protected $ebook;

    /**
     * Конструктор.
     * Используем DI.
     *
     * @param Ebook $ebook
     */
    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open(): string
    {
        return $this->ebook->turnOn();
    }

    public function turnPage(): string
    {
        return $this->ebook->pressNextButton();
    }
}