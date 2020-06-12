<?php

namespace DesignPatterns\Behavioral\Visitor\Visitables;

abstract class AbstractDocument implements VisitableInterface
{
    public $title;
    public $content;
    
    /**
     * Конструктор.
     *
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
}