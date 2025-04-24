<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditNote(): void //mendeklarasikan method testEditNote
    {
        $this->browse(function (Browser $browser) { //membuka browser
            $browser->visit('/') //visit halaman utama
            ->assertSee('Log in') //cek apakah ada text Log in
            ->clickLink('Log in') //klik link Log in
            ->type('email', 'barnabas@example.com') //input email
            ->type('password', 'barnabas123') //input password
            ->press('LOG IN') //klik button LOG IN
            ->assertSee('logged in!') //cek apakah ada text logged in!
            ->visit('/notes') //visit /notes
            ->clickLink('Edit') //klik button Edit
            ->type('title', 'Praktikum PPL') //input title
            ->type('description', 'abcdefg') //input description
            ->press('UPDATE'); //klik button UPDATE
    });
    }
}