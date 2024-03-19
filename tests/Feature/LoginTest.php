<?php 

namespace Mekadalibrahem\Uiauthpackage\Tests\Feature ;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Mekadalibrahem\Uiauthpackage\Tests\TestCase;

class LoginTest extends TestCase 
{
    use RefreshDatabase ;
    function test_view_login_page(){
        $this->assertEquals(Route('login_view') , 200);
    }
}