<?php 
namespace MekadAlibrahem\Uiauthpackage\Console ;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallUiAuth extends Command
{
    protected $signature = 'uiauthpackage:install';

    protected $description = 'Install the UiAuthPackage';

    public function handle()
    {
        $this->info('Installing UiAuthPackage...');

        $this->info('Publishing configuration...');

        if (! $this->configExists('uiauthpackage.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration');
        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten');
            }
        }

        $this->info('Installed UiAuthPackage');
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm(
            'Config file already exists. Do you want to overwrite it?',
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "mekadalibrahem\uiauthpackage\UiAuthPackageServiceProvider",
            '--tag' => "config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

       $this->call('vendor:publish', $params);
    }
}

