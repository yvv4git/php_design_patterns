<?php

namespace DesignPatterns\Stuctural\Facade\Systems;

/**
 * Система-1.
 * @class Bank
 */
class Bank
{
    private $amount;

    /**
     * Инициализируем счет.
     *
     * @param float $amout
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function OpenTransaction(): void {}
    public function CloseTransaction(): void {}
    
    /**
     * Обрабатываем операцию.
     *
     * @param float $amount
     * @return void
     */
    public function transferMoney(float $amount): void
    {
        $this->amount += $amount;
    }

    /**
     * Сколько денег на счете?
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}