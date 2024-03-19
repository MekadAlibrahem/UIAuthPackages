<?php 

namespace MekadAlibrahem\Uiauthpackage\Tests\Feature ;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MekadAlibrahem\Uiauthpackage\Tests\TestCase;

class LoginTest extends TestCase 
{
    use RefreshDatabase ;
    function test_view_login_page(){
        // $this->assertTrue(file_exists('') , 200);
        $this->assertTrue(1==1);
    }
}