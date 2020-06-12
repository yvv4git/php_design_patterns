<?php

namespace DesignPatterns\Behavioral\State;

class TextEditor
{
    /**
     * Инстанс на объект имплементирующий интерфейс State.
     * @var State $state
     */
    protected $state;
    
    /**
     * Конструктор.
     *
     * @param StateInterface $state
     */
    public function __construct(StateInterface $state)
    {
        $this->state = $state;
    }
    
    /**
     * Позволяет задать параметр state во время выполнения программы.
     * @param State $state
     */
    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }
    
    /**
     * Выполняет конкретный метод на текущем объекте состояния.
     *
     * @param string $words
     * @return string
     */
    public function type(string $words): string
    {
        return $this->state->write($words);
    }
}