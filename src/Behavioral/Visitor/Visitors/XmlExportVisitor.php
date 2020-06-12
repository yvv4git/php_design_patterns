<?php

namespace DesignPatterns\Behavioral\Visitor\Visitors;

use DesignPatterns\Behavioral\Visitor\Visitables\Report;
use DesignPatterns\Behavioral\Visitor\Visitables\Template;

/**
 * Конкретный посетитель, который расширяет поведение 
 * допкумента возможностью выгружать в xml.
 */
class XMLExportVisitor implements VisitorInterface
{
    /**
     * Метод для обработки документа типа Template.
     * @param Template $template
     * @return string
     */
    public function visitTemplate(Template $template): string
    {
        $xml = new \SimpleXMLElement('<xml/>');
        $xml->addChild('header', $template->header)
            ->addChild('title', $template->title)
            ->addChild('content', $template->content)
            ->addChild('footer', $template->footer);
        return $xml->asXML();
    }

    /**
     * Метод для обработки документа типа Report.
     * @param Report $report
     * @return string
     */
    public function visitReport(Report $report): string
    {
        $xml = new \SimpleXMLElement('<xml/>');
        $xml->addChild('title', $report->title)
            ->addChild('diagram', $report->diagram)
            ->addChild('content', $report->content);
        return $xml->asXML();
    }
}