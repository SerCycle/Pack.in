<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $Admin) {
            $Admin->visit('/Admin')
                ->assertSee('Hello, Admin')
                ->clickLink('CUSTOME ORDER')
                ->assertSee('asep one tap');
        });
    }
}
