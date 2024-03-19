<?php

namespace MekadAlibrahem\Uiauthpackage\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use MekadAlibrahem\Uiauthpackage\Tests\TestCase;

class InstallUiAuthTest extends TestCase
{
    /** @test */
    function the_install_command_copies_the_configuration()
    {
        // make sure we're starting from a clean state
        if (File::exists(config_path('uiauthpackage.php'))) {
            unlink(config_path('uiauthpackage.php'));
        }

        $this->assertFalse(File::exists(config_path('uiauthpackage.php')));

        Artisan::call('uiauthpackage:install');

        $this->assertTrue(File::exists(config_path('uiauthpackage.php')));
    }
}
