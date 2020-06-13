<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Bridge\Pages\HomePage;
use DesignPatterns\Structural\Bridge\Pages\AboutPage;
use DesignPatterns\Structural\Bridge\Themes\DarkTheme;
use DesignPatterns\Structural\Bridge\Themes\LightTheme;

class BridgeTest extends TestCase
{
    public function testBridge()
    {
        $darkTheme = new DarkTheme();
        $homePage = new HomePage($darkTheme);
        $this->assertSame('Home page in Dark colors', $homePage->getContent());
        
        $lightTheme = new LightTheme();
        $aboutPage = new AboutPage($lightTheme);
        $this->assertSame('About page in White colors', $aboutPage->getContent());
    }
}