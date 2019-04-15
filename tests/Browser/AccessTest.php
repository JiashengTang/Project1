<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AccessTest extends DuskTestCase
{
    public function testExample()
    {
        $this->browse(function ($first, $second) {
            $first->visit('/')
                  ->assertSee('Login');
        });
    }
}
