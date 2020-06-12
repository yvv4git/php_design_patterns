<?php

namespace DesignPatterns\Behavioral\Visitor\Visitables;

use DesignPatterns\Behavioral\Visitor\Visitors\VisitorInterface;

/**
 * Конкретный документ - Template.
 */
class Template extends AbstractDocument
{
    public $header = '{header}';
    public $footer = '{footer}';
    
    /**
     * Принимаем посетителя.
     *
     * @param VisitorInterface $visitor
     * @return string
     */
    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitTemplate($this);
    }
}