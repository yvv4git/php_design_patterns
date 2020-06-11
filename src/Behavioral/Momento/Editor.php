<?php

namespace DesignPatterns\Behavioral\Momento;

/**
 * Данный класс позволяет сохранять и восстанавливать состояние при необходимости.
 * Использование паттерна Снимок / Momento.
 */
class Editor
{
    private $content = '';

    /**
     * Наполняем наш объект данными.
     *
     * @param string $words
     * @return void
     */
    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    /**
     * Возвращаем собранные данные.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Сохраняем свое состояние.
     */
    public function save(): EditorMemento
    {
        return new EditorMemento($this->content);
    }

    /**
     * Восстанавливаем состояние из обхекта momento.
     * @param EditorMemento $memento
     */
    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}