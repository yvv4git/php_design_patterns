<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Конкретная стратегия - алгоритм быстрой сортировки.
 */
class QuickSortStrategy implements SortStrategyInterface
{
    /**
     * Сортируем.
     *
     * @param array $data
     * @return array
     */
    public function sort(array $data): array
    {
        $count= count($data);
        if ($count <= 1) {
            return $data;
        }
    
        $first_val = $data[0];
        $left_arr = array();
        $right_arr = array();
    
        for ($i = 1; $i < $count; $i++) {
            if ($data[$i] <= $first_val) {
                $left_arr[] = $data[$i];
            } else {
                $right_arr[] = $data[$i];
            }
        }
    
        $left_arr = $this->sort($left_arr);
        $right_arr = $this->sort($right_arr);
    
        return array_merge($left_arr, array($first_val), $right_arr);
    }
}