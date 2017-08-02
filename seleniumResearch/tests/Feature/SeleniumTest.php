<?php

namespace Tests\Feature;

use PHPUnit_Extensions_Selenium2TestCase;

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://seleniumresearch.dev/');
    }

    public function testTitle()
    {
        $this->visit('/')
             ->assertEquals('Laravel', $this->title());
    }

    protected function visit($path)
    {
        $this->url($path);

        return $this;
    }

}
