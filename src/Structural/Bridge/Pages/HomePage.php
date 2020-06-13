<?php

namespace DesignPatterns\Structural\Bridge\Pages;

class HomePage extends AbstractWebPage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return "Home page in " . $this->theme->getColor();
    }
}