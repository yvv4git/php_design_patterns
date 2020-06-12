<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Конкретная стратегия - алгоритм пузырьковой сортировки.
 */
class BubbleSortStrategy implements SortStrategyInterface
{
    /**
     * Сортируем.
     *
     * @param array $data
     * @return array
     */
    public function sort(array $data): array
    {
        $cnt = count($data);
        echo "Size of input array: $cnt \n";
        
        for ($i=0; $i<$cnt-1; $i++) {
            for ($j=0; $j<$cnt-1; $j++) {
                if ($data[$j] > $data[$j+1]) {
                    $tmp = $data[$j+1];
                    $data[$j+1] = $data[$j];
                    $data[$j] = $tmp;
                }
            }
        }
        
        return $data;   
    }
}