<?php

namespace DesignPatterns\Stuctural\Composite_v2;

/**
 * "Композит"
 * Содержит в себе другие компоненты.
 */
class Composite extends Component
{
    /**
     * @var \SplObjectStorage
     */
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    /**
     * Метод переопределяется.
     * У композита этот метод реализует добавление новых компонентов
     * внутрь себя.
     *
     * @param Component $component
     * @return void
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * Метод переопределяется.
     * У композита этот метод реализует удаление компонентов изнутри.
     *
     * @param Component $component
     * @return void
     */
    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    /**
     * Метод переопределяется, чтоб возвращал true.
     *
     * @return boolean
     */
    public function isComposite(): bool
    {
        return true;
    }
        
    /**
     * Данный метод вызывает такой же метод у всех объектов внутри себя.
     *
     * @return string
     */
    public function operation(): string
    {
        $results = [];

        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode("+", $results) . ")";
    }       
}