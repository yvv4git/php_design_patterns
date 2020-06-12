<?php

namespace DesignPatterns\Behavioral\Visitor\Visitables;

use DesignPatterns\Behavioral\Visitor\Visitors\VisitorInterface;

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor);
}