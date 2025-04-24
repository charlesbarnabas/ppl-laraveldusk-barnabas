<?php

namespace Tests\Browser; //mendeklarasikan namespace test browser
use Illuminate\Foundation\Testing\DatabaseMigrations; //menggunakan trait DatabaseMigrations
use Laravel\Dusk\Browser; //menggunakan class Browser
use Tests\DuskTestCase; //menggunakan class DuskTestCase

class RegistTest extends DuskTestCase //mendeklarasikan class RegistTest yang merupakan turunan dari DuskTestCase
{
    /**
     * A Dusk test example.
    @group regist
     */
    public function testRegist(): void //mendeklarasikan method testRegist
    {
        $this->browse(function (Browser $browser) { //membuka browser
            $browser->visit('/') //mengunjungi halaman utama
                    ->assertSee(text : 'Modul 3') //memastikan halaman utama memuat tulisan Modul 3
                    ->clickLink(link : 'Register') //mengklik link Register
                    ->assertPathIs(path : '/register') //memastikan bahwa path saat ini adalah /register
                    ->type(field : 'name', value: 'Charles Ricky Barnabas') //mengisi field name dengan nama Charles Ricky Barnabas
                    ->type(field : 'email', value : 'barnabas@example.com') //mengisi field email dengan email barnabas@example.com
                    ->type(field : 'password', value : 'barnabas123') //mengisi field password dengan password barnabas123
                    ->type(field : 'password_confirmation', value : 'barnabas123') //mengisi field password_confirmation dengan password barnabas123
                    ->press(button : 'REGISTER'); //menekan tombol REGISTER
        }); 
    }
}
