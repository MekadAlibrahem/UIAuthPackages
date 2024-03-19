<?php 
namespace Mekadalibrahem\Uiauthpackage\Tests ;

use Mekadalibrahem\Uiauthpackage\UiAuthpackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase 
{
    public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }
  protected function getPackageProviders($app)
  {
    return [
        UiAuthpackageServiceProvider::class,
    ];
  
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }

}
