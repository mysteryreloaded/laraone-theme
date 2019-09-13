<?php 

namespace mysteryreloaded\laraonetheme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

    public function boot() {
        $this->commands([
            MoveFiles::class
        ]);
    }

    public function register() {
        $this->app->bind('theme-files', function() {
             return new FilePacker();
        });
    }
}