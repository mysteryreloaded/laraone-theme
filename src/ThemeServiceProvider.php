<?php 

namespace mysteryreloaded\laraonetheme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

    protected $commands = ['mysteryreloaded\laraonetheme\Commands\MoveFiles'];

    public function boot() {
        // $this->commands([
        //     MoveFiles::class
        // ]);
    }

    public function register() {
        // $this->app->bind('theme-files', function() {
        //      return new FilePacker();
        // });
        $this->commands($this->commands);
    }
}