<?php //tests/Browser/LoginTest.php

namespace Tests\Browser; //mendeklarasikan namespace test browser

use Illuminate\Foundation\Testing\DatabaseMigrations; //menggunakan trait DatabaseMigrations
use Laravel\Dusk\Browser; //menggunakan class Browser
use Tests\DuskTestCase; //menggunakan class DuskTestCase

class LoginTest extends DuskTestCase //mendeklarasikan class LoginTest yang merupakan turunan dari DuskTestCase
{
    /**
     * A Dusk test example.
     @group login
     */
    public function testLogin(): void //mendeklarasikan method testLogin
    {
        $this->browse(function (Browser $browser) { //membuka browser
            $browser->visit('/') //mengunjungi halaman utama
                    ->assertSee(text : 'Modul 3') //memastikan halaman utama memuat tulisan Modul 3
                    ->clickLink(link : 'Log in') //mengklik link lOGIN
                    ->assertPathIs(path : '/login') //memastikan bahwa path saat ini adalah /lOGIN
                    ->type(field : 'email', value : 'barnabas@example.com') //mengisi field email dengan email barnabas@example.com
                    ->type(field : 'password', value : 'barnabas123') //mengisi field password dengan password barnabas123
                    ->press(button : 'LOG IN'); //menekan tombol lOGIN
        }); 
    }
}
