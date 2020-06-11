<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Конкретный наблюдатель.
 * @class Logger
 */
class Logger implements ObserverInterface
{
    /**
     * Сохраняем сообщение в лог.
     *
     * @param string $message
     * @return void
     */
    private function log(string $message): void
    {
        echo __CLASS__ . ' : ' . $message;
    }

    /**
     * Обновляемся.
     *
     * @param ObservableInterface $subject
     * @return void
     */
    public function update(ObservableInterface $subject): void
    {
        if ($subject->getStatus() == Comment::SAVED_SUCCESS) {
            $this->log("Сохраняем информацию в лог", Comment::SAVED_SUCCESS);
        }
    }
}