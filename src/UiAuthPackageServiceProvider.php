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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'uiauthpackage');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/uiauthpackage'),
        ]);

        // $this->publishes([
        //     __DIR__.'/../routes/web.php' => resource_path('resource/vendor/uiauthpackage'),
        // ]);
    
    }
}


