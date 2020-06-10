<?php

namespace DesignPatterns\Behavioral\Iterator;

/**
 * Конкретная коллекция. Имплементирует интерфейс \IteratorAggregate, который
 * гарантирует, что коллеция подходит итератору.
 */
class MyCollection implements \IteratorAggregate
{
    /**
     * Элементы коллекции.
     *
     * @var array
     */
    private $items = [];

    /**
     * Добавляем элементы в коллекцию.
     *
     * @param string $item
     * @return MyCollection
     */
    public function addItem(string $item): MyCollection
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * Возвращаем список элементов.
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Отдаем итератор, которым будем перечислять коллекцию.
     *
     * @return \Iterator
     */
    public function getIterator(): \Iterator
    {
        return new ReverseIterator($this);
    }
}