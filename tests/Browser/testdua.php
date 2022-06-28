<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class testdua extends DuskTestCase
{
    public function testBasicExample()
    {
        $this->browse(function (Browser $dua) {
            $dua->visit('/Admin')
                ->assertSee('Hello, Admin')
                ->clickLink('CUSTOME ORDER')
                ->assertSee('asep one tap');

        });
    }
}
