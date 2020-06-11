<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * Конкретный наблюдаемый класс.
 */
class Comment implements ObservableInterface
{
    private $status = 0;

    const SAVED_SUCCESS = 1;

    private $observers = array();

    /**
     * Возвращаем числа.
     *
     * @return integer
     */
    public function getStatus(): int 
    {
        return $this->status;
    }

    /**
     * Добавить наблюдателя.
     * @param Observer $instance
     */
    public function attach(ObserverInterface $instance): bool
    {
        foreach ($this->observers as $observer) {
            if ($instance === $observer) {
                return false;
            }
        }

        // добавить наблюдателя
        $this->observers[] = $instance;
        return true;
    }
    
    /**
     * Удалить наблюдателя.
     * @param Observer $instance
     */
    public function detach(ObserverInterface $instance): void
    {
        foreach ($this->observers as $key => $observer) {
            if ($instance === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    /**
     * Отправка каждому наблюдателю уведомления.
     */
    public function notify(): void
    {
        // каждому наблюдателю передаем уведомление
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Имитация сохранения комментария.
     */
    public function save(): bool
    {
        if (true) {
            $this->status = self::SAVED_SUCCESS;
        }

        $this->notify();

        // симулируем, что все прошло удачно
        return true; 
    }
}