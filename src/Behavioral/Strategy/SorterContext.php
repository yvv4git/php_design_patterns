<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Контекст.
 */
class SorterContext
{
    /**
     * Undocumented variable
     *
     * @var SortStrategyInterface
     */
    protected $sortStrategy;
    
    /**
     * Контекст принимает стратегия через конструктор.
     * @param SortStrategy $sortStrategy
     */
    public function __construct(SortStrategyInterface $sortStrategy)
    {
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * Так же можно изменить стратегия через сеттер.
     * @param SortStrategy $sortStrategy
     */
    public function setStrategy(SortStrategyInterface $sortStrategy): void
    {
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * Делегируем работу объекту конкретной стратегии.
     * @param array $data
     * @return array
     */
    public function sortArray(array $data): array
    {
        return $this->sortStrategy->sort($data);
    }
}