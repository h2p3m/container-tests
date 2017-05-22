<?php

class SeleniumChromeTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://google.com/');
    }

    public function testTitle()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $this->url('http://www.google.com/');
            $this->assertContains('Google', $this->title());
            $this->url('http://www.heise.de/');
            $this->url('http://www.amazon.com/');
        }
    }

}
