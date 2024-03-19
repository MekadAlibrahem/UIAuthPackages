<?php 
namespace MekadAlibrahem\Uiauthpackage; 

use Illuminate\Support\ServiceProvider ;

class UiAuthpackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogpackage');
    }
}


