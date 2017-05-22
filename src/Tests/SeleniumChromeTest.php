<?php

class SeleniumChromeTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected function setUp()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $this->setBrowser('chrome');
            $this->setBrowserUrl('http://google.com/');
            sleep(2);
        }
    }

    public function testTitle()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $this->url('http://www.google.com/');
            $this->assertContains('Google', $this->title());
            sleep(2);
        }
    }

}
