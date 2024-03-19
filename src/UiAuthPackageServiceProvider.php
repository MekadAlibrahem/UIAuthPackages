<?php 
namespace MekadAlibrahem\Uiauthpackage; 

use Illuminate\Support\ServiceProvider ;
use MekadAlibrahem\Uiauthpackage\Console\InstallUiAuth;

class UiAuthpackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
         // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'uiauthpackage');
            $this->commands([
                InstallUiAuth::class,
            ]);

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/uiauthpackage'),
            ],'views');
        }

    
      

        // $this->publishes([
        //     __DIR__.'/../routes/web.php' => resource_path('resource/vendor/uiauthpackage'),
        // ]);
    
    }
}


