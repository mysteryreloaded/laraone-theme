<?php

namespace mysteryreloaded\laraonetheme;

use Illuminate\Support\ServiceProvider;
use mysteryreloaded\laraonetheme\Commands\SampleCommand;

class ThemeServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->commands([
            Commands\SampleCommand::class,
            Commands\ThemeCreateCommand::class,
            Commands\ThemePackageCommand::class,
            Commands\ThemeSyncCommand::class,
            Commands\ThemeValidateCommand::class,
        ]);
    }
}
