<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $User) {
            $User->visit('/')
                    ->assertSee('Custom Your Perfect Package')
                    ->clickLink('Start Customize')
                    ->assertSee('Pack.in menerima penjualan bahan package berupa kardus, maupun bungkusan lainnya dalam fitur “Jual Kardus”.')
                    ->clickLink('Service')
                    ->assertSee('Produk #2')
                    ->clickLink('Produk #2')
                    ->assertSee('lorem ipsum produk 2')
                    ->clickLink('PESAN SEKARANG')
                    ->assertSee('Design');
        });
    }
}