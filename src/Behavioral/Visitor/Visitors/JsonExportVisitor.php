<?php

namespace DesignPatterns\Behavioral\Visitor\Visitors;

use DesignPatterns\Behavioral\Visitor\Visitables\Report;
use DesignPatterns\Behavioral\Visitor\Visitables\Template;

/**
 * Конкретный посетитель, который расширяет поведение 
 * допкумента возможностью выгружать в json.
 */
class JSONExportVisitor implements VisitorInterface
{
    /**
     * Метод для обработки документа типа Template.
     * @param Template $template
     * @return string
     */
    public function visitTemplate(Template $template): string
    {
        return json_encode($template->header . $template->title . $template->content . $template->footer);
    }
    
    /**
     * Метод для обработки документа типа Report.
     * @param Report $report
     * @return string
     */
    public function visitReport(Report $report): string
    {
        return json_encode($report->title . $report->diagram . $report->content);
    }
}