<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Шаблонный метод / Template method
 * Определяет все шаги в алгоритме.
 */
abstract class AbstractBuilder
{
    /**
     * Конечный продукт.
     *
     * @var array
     */
    protected $product;

    /**
     * Алгоритм.
     *
     * @return void
     */
    final public function build(): void
    {
        $this->create();
        $this->init();
        $this->test();
        $this->deploy();
    }

    /**
     * Конкретный шаг.
     *
     * @return void
     */
    protected function create(): void
    {
        $this->product[] = 'Создаем приложение.';
    }

    /**
     * Конкретный шаг.
     *
     * @return void
     */
    protected function init(): void
    {
        $this->product[] = 'Инициализируем.';
    }

    /**
     * Конкретный шаг.
     *
     * @return void
     */
    protected function test(): void
    {
        $this->product[] = 'Запускаем тесты.';
    }

    /**
     * Абстрактный метод переопределяется в наследниках.
     */
    abstract protected function deploy(): void;

    /**
     * Возвращаем конечный продукт.
     *
     * @return array
     */
    public function getProduct(): array
    {
        return $this->product;
    }
}