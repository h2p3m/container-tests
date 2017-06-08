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
        $this->url('http://www.google.com/');
        $this->assertContains('Google', $this->title());
    }
}
