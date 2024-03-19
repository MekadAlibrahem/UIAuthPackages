<?php 

namespace MekadAlibrahem\Uiauthpackage\Tests\Feature ;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MekadAlibrahem\Uiauthpackage\Tests\TestCase;

class LoginTest extends TestCase 
{
    use RefreshDatabase ;
    function test_view_login_page(){
        $this->assertEquals(Route('login_view') , 200);
    }
}