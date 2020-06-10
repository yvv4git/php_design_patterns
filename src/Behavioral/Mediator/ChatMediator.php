<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * Конкретный посредник получает уведомления от компонента и знает как на
 * них среагировать.
 */
class ChatMediator implements MediatorInterface
{
    /**
     * Сообщения в чате.
     *
     * @var array
     */
    private $chatBuffer;

    /**
     * Компонент шлет событие метиатору, а он определяет
     * какому из компонентов передать его.
     *
     * @param mix $sender
     * @param string $event
     * @param mix $data
     * @return void
     */
    public function notify($sender, $event, $data)
    {
        if ($sender instanceof UserComponent && $event == 'sendMessage') {
            $this->chatBuffer[] = "{$sender->name}: $data->message";
        } elseif ($sender instanceof BotComponent && $event == 'banUser') {
            $this->chatBuffer[] = "User {$data->name} was banned by {$sender->name}";
        }
    }

    /**
     * Возвращаем буффер, содержащий сообщения чата.
     *
     * @return array
     */
    public function getChatBuffer(): array
    {
        return $this->chatBuffer;
    }
}