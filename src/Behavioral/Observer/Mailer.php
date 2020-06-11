<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Конкретный наблюдатель.
 * @class Mailer
 */
class Mailer implements ObserverInterface
{
    /**
     * Отпарвляем сообщение типа по email.
     *
     * @param string $message
     * @return void
     */
    private function send(string $message): void
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
            $this->send("Шлем оповещение по email", Comment::SAVED_SUCCESS);
        }
    }
}