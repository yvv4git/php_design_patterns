<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Интерфейс "стратегия" определяет общие методы для всех алгоритмов
 * стратегий.
 */
interface SortStrategyInterface
{
    public function sort(array $data): array;
}