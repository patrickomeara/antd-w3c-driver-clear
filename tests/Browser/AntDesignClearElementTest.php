<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AntDesignClearElementTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://n98f62.csb.app/')
                    ->waitFor('input[name=input]', 15)
                    ->type('input', 'This clears the input')
                    ->type('ant-input', 'This adds to the existing text')
                    ->assertInputValue('input', 'This clears the input')
                    ->assertInputValue('ant-input', 'This adds to the existing text');
        });
    }
}
