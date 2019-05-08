<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('email', 'test@test.com')
                ->type('name', 'edgar')
                ->type('mobile', '0400000000')
                ->type('password', '123')
                ->type('confirm-password', '123')
                ->click('#register-btn')
                ->visit('/login')
                ->type('email', 'test@test.com')
                ->type('password', '123')
                ->click('#m_login_signin_submit')
                ->assertSee('Hi,edgar');
        });
    }
}
