<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

//Testi çalıştırmak için vendor/herkod/herkod-core klasöründe ../../bin/phpunit komutunu kullanıyoruz.

class UserTest extends TestCase
{
    // public function testKullaniciOlustur()
    // {
    //     $user = factory(App\User::class)->create();
    //     $this->assertEquals($user->username, 'evrend');
    // }

    public function testKullaniciSil()
    {
        $this->assertTrue(true);
    }

    // public function testKullaniciGuncelle()
    // {
    //     $this->assertTrue(false);
    // }

}
