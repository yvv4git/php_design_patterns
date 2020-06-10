<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Конкретный компонент.
 * Имеет только канал связи с послердником. Сам напряму ничего не делает.
 */
class UserComponent
{
    public $name;
    protected $mediator;
    
    /**
     * Конструктор.
     *
     * @param string $name
     * @param MediatorInterface $mediator
     */
    public function __construct(string $name, MediatorInterface $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }
    
    /**
     * Послать собщение через медиатор в чат.
     *
     * @param string $message
     * @return void
     */
    public function sendMessage(string $message)
    {
        $data = new \stdClass();
        $data->message = $message;
        $this->mediator->notify($this, 'sendMessage', $data);
    }
}