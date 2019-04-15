<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteMissionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'test@test.com')
                    ->type('password', '123')
                    ->click('#m_login_signin_submit')
                    ->visit('/missions')
                    ->click('.delete-mission')
                    ->assertSee('Reactive')
                    ->click('.reactive-mission')
                    ->assertSee('Delete');
        });
    }
}
