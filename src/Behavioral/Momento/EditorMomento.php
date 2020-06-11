<?php

namespace DesignPatterns\Behavioral\Momento;

/**
 * Конкретный memento содержит инфраструктуру, для сохраннения соятояния объекта.
 */
class EditorMemento implements MementoInterface
{
    protected $content;

    /**
     * @param string $content Какие-то данные.
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Возвращаем данные.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}