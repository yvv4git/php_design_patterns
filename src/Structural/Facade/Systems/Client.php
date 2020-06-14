<?php

namespace DesignPatterns\Stuctural\Facade\Systems;

/**
 * Система-2.
 * @class Client
 */
class Client
{
    private $amount;

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