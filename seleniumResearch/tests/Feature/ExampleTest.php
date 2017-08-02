<?php

namespace Tests\Feature;

use Tests\SeleniumTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends SeleniumTestCase
{
    /** @test */
    public function testTitle()
    {
        $this->visit('/')
             ->see('Laravel', 'title');
    }

    /** @test */
    public function it_fills_out_a_form()
    {
        $this->visit('/form')
             ->type('Hello World', 'message')
             ->press('Submit')
             ->see('The form was submitted.')
             ->seePageIs('/form-sumbitted');
    }
}
