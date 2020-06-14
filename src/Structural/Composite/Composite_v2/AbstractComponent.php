<?php

namespace DesignPatterns\Stuctural\Composite_v2;

abstract class Component
{
    /**
     * @var Component
     */
    protected $parent;
     
    /**
     * Задаем родительский компонент.
     *
     * @param Component $parent
     * @return void
     */
    public function setParent(?Component $parent): void
    {
        $this->parent = $parent;
    }
    
    /**
     * Возвращаем родительский компонент.
     *
     * @return Component
     */
    public function getParent(): Component
    {
        return $this->parent;
    }
     
    /**
     * Этот метод будет расширяться только у Composit'ов, но останется
     * пустым у Leaf объектов.
     *
     * @param Component $component
     * @return void
     */
    public function add(Component $component): void { }
 
    /**
     * Удаляем.
     *
     * @param Component $component
     * @return void
     */
    public function remove(Component $component): void { }
     
    /**
     * @return boolean
     */
    public function isComposite(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    abstract public function operation(): string;
}