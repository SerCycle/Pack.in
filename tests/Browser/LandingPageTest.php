<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LandingPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Pack.in')
                    ->click('a',' Start Customize ')
                    ->assertSee('Ingin Memantau Pesananmu?');
        });
    }
}
