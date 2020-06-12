<?php

namespace DesignPatterns\Behavioral\Visitor\Visitors;

use DesignPatterns\Behavioral\Visitor\Visitables\Report;
use DesignPatterns\Behavioral\Visitor\Visitables\Template;

interface VisitorInterface
{
    public function visitTemplate(Template $template);
    public function visitReport(Report $report);
}