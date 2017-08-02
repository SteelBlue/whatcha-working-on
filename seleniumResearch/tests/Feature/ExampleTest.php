<?php

namespace Tests\Feature;

use Tests\SeleniumTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends SeleniumTestCase
{
    /**
     * Test the title <title> text of the homepage.
     *
     * @return void
     */
    public function testTitle()
    {
        $this->visit('/')
             ->see('Laravel', 'title');
    }
}
