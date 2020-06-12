<?php

namespace Tests\Behavioral;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Visitor\Visitables\Report;
use DesignPatterns\Behavioral\Visitor\Visitables\Template;
use DesignPatterns\Behavioral\Visitor\Visitors\XmlExportVisitor;
use DesignPatterns\Behavioral\Visitor\Visitors\JsonExportVisitor;

class VisitorTest extends TestCase
{
    public function testVisitor()
    {
        // основные классы
        $report = new Report('report_title', 'report_content');
        $template = new Template('template_title', ' template_content');

        // предаем управление посетителям
        $actualReportJson = $report->accept(new JsonExportVisitor());
        $actualReportXml = $report->accept(new XmlExportVisitor()) . PHP_EOL;
        $actualTemplateJson = $template->accept(new JsonExportVisitor()) . PHP_EOL;

        //$this->assertTrue(39, mb_strlen($actualReportJson));
    }
}