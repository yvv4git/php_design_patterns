<?php

namespace DesignPatterns\Stuctural\Facade;

use DesignPatterns\Stuctural\Facade\Systems\Log;
use DesignPatterns\Stuctural\Facade\Systems\Bank;
use DesignPatterns\Stuctural\Facade\Systems\Client;

class Facade
{
    private $bank;
    private $client;
    private $log;

    /**
     * Инициализируем фасад.
     *
     * @param Bank $bank
     * @param Client $client
     * @param Log $log
     */
    public function __construct(Bank $bank, Client $client, Log $log)
    {
        $this->bank = $bank;
        $this->client = $client;
        $this->log = $log;
    }

    /**
     * Переводим деньги.
     *
     * @param float $amount
     * @return void
     */
    public function transfer(float $amount): void 
    {
        $this->bank->OpenTransaction();
        $this->client->OpenTransaction();
        $this->log->logTransaction('Transaction open');

        $this->bank->transferMoney(-$amount);
        $this->log->logTransaction('Transfer money from bank');

        $this->client->transferMoney($amount);
        $this->log->logTransaction('Transfer money to client');

        $this->bank->CloseTransaction();
        $this->client->CloseTransaction();
        $this->log->logTransaction('Transaction close');
    }
}