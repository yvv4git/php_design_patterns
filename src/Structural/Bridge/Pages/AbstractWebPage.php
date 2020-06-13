<?php

namespace DesignPatterns\Structural\Bridge\Pages;

use DesignPatterns\Structural\Bridge\Themes\ThemeInterface;

abstract class AbstractWebPage
{
    protected $theme;
    
    /**
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    abstract public function getContent(): string;
}
