<?php

namespace mysteryreloaded\laraonetheme;

use Illuminate\Support\ServiceProvider;
use mysteryreloaded\laraonetheme\Commands\SampleCommand;

class ThemeServiceProvider extends ServiceProvider
{

    // protected $commands = ['mysteryreloaded\laraonetheme\Commands\MoveFiles'];

    public function boot()
    {
        // $this->commands([
        //     ThemeCreateCommand::class,
        //     ThemePackageCommand::class,
        //     ThemeSyncCommand::class,
        //     ThemeValidateCommand::class
        // ]);

        if($this->app->runningInConsole()) {
            $this->commands([
                SampleCommand::class
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('theme-files', function () {
            FilePacker::move();
        });
        // $this->commands($this->commands);
    }
}
