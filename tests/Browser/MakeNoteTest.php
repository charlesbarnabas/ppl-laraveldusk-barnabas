<?php

namespace Tests\Browser; //mendeklarasikan namespace test browser

use Illuminate\Foundation\Testing\DatabaseMigrations; //menggunakan trait DatabaseMigrations
use Laravel\Dusk\Browser; //menggunakan class Browser
use Tests\DuskTestCase; //menggunakan class DuskTestCase

class MakeNoteTest extends DuskTestCase //mendeklarasikan class MakeNoteTest yang merupakan turunan dari DuskTestCase
{
    /**
     * A Dusk test example.
    @group makeNote
     */
    public function testMakeNote(): void //mendeklarasikan method testMakeNote
    {
        $this->browse(function (Browser $browser) { //membuka browser
            $browser->visit('/') //mengunjungi halaman utama
                    ->assertSee(text : 'Modul 3') //memastikan halaman utama memuat tulisan Modul 3
                    ->clickLink(link : 'Log in') //mengklik link lOGIN
                    ->assertPathIs(path : '/login') //memastikan bahwa path saat ini adalah /lOGIN
                    ->type(field : 'email', value : 'barnabas@example.com') //mengisi field email dengan email barnabas@example.com
                    ->type(field : 'password', value : 'barnabas123') //mengisi field password dengan password barnabas123
                    ->press(button : 'LOG IN') //menekan tombol lOGIN
                    ->assertPathIs(path : '/dashboard') //memastikan bahwa path saat ini adalah /Dashboard
                    ->assertSee(text : 'Notes') //memastikan halaman Dashboard memuat tulisan Dashboard
                    ->clickLink(link : 'Notes') //mengklik link Notes
                    ->assertPathIs(path : '/notes') //memastikan bahwa path saat ini adalah /Notes
                    ->assertSee(text : 'Create Note') //memastikan halaman Notes memuat tulisan Create Note
                    ->clickLink(link : 'Create Note') //mengklik link Create Note
                    ->assertPathIs(path : '/create-note') //memastikan bahwa path saat ini adalah /create-note
                    ->assertSee(text : 'Create Note') //memastikan halaman Create Note
                    ->type(field : 'title', value : 'Test Note 1') //mengisi field title dengan Test Note
                    ->type(field : 'description', value : 'This is a test note.') //mengisi field desc dengan This is a test note.
                    ->press(button : 'CREATE'); //menekan tombol create
        }); 
    }
}
