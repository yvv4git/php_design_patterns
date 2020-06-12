<?php

namespace DesignPatterns\Behavioral\Visitor\Visitables;

use DesignPatterns\Behavioral\Visitor\Visitors\VisitorInterface;

/**
 * Конкретный документ - Report.
 */
class Report extends AbstractDocument
{
    public $diagram = ' {diagram} ';
    
    /**
     * Принимаем посетителя и отдаем ему инициативу.)
     *
     * @param VisitorInterface $visitor
     * @return string
     */
    public function accept(VisitorInterface $visitor): string
    {
        return $visitor->visitReport($this);
    }
}