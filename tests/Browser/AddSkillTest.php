<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Http\Models\User;

class AddSkillTest extends DuskTestCase
{
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'test@test.com')
                    ->type('password', '123')
                    ->click('#m_login_signin_submit')
                    ->visit('/skills')
                    ->assertSee('Manage Skill')
                    ->select('skill-id', '4')
                    ->click('#submit-btn')
                    ->assertSee('Bd');
        });
    }
}
