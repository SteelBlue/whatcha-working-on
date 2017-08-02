<?php

namespace Tests;

use PHPUnit_Extensions_Selenium2TestCase;

class SeleniumTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    protected $baseUrl = 'http://seleniumresearch.dev';

    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://seleniumresearch.dev/');
    }

    /**
     * Visit a url given a path.
     *
     * @param $path
     * @return $this
     */
    protected function visit($path)
    {
        $this->url($path);

        return $this;
    }

    protected function type($value, $name)
    {
        $this->byName($name)->value($value);

        return $this;
    }

    protected function press($text)
    {
        $this->byXPath("//button[contains(text(), '{$text}')]")
             ->click();

        return $this;
    }

    /**
     * Assert the tag contains given text.
     *
     * @param $text
     * @param string $tag
     * @return $this
     */
    protected function see($text, $tag = 'body')
    {
        $this->assertContains($text, $this->byTag($tag)->text());

        return $this;
    }

    protected function seePageIs($path)
    {
        $this->assertEquals($this->baseUrl . $path, $this->url());

        return $this;
    }

    protected function hold($seconds)
    {
        sleep($seconds);

        return $this;
    }

}
