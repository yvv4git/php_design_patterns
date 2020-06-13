<?php

namespace DesignPatterns\Structural\Bridge\Themes;

class LightTheme implements ThemeInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'White colors';
    }
}