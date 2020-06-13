<?php

namespace DesignPatterns\Structural\Bridge\Pages;

class AboutPage extends AbstractWebPage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return "About page in " . $this->theme->getColor();
    }
}