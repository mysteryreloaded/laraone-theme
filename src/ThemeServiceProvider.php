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

           
    }

    public function register()
    {

        // $this->commands($this->commands);
        $this->commands([
            SampleCommand::class
        ]);
    }
}
