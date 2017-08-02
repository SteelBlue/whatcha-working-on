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

    /**
     * Test the title <title> text of the homepage.
     */
    public function testTitle()
    {
        $this->visit('/')
            ->see('Laravel', 'title');
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

}
