<?php

namespace DesignPatterns\Structural\Bridge\Themes;

class DarkTheme implements ThemeInterface
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'Dark colors';
    }
}