<?php

namespace DesignPatterns\Behavioral\Mediator;

class BotComponent
{
    public $name = 'Bot';

    /**
     * Бот знает медиатора.
     *
     * @var MediatorInterface
     */
    protected $mediator;
    
    /**
     * Конструктор.
     *
     * @param MediatorInterface $mediator
     */
    public function __construct(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
    
    /**
     * Баним пользователя.
     *
     * @param UserComponent $user
     * @return void
     */
    public function banUser(UserComponent $user)
    {
        $this->mediator->notify($this, 'banUser', $user);
    }
}