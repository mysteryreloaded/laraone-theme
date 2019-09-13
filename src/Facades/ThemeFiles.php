<?php 

namespace mysteryreloaded\laraonetheme\Facades;

 use Illuminate\Support\Facades\Facade;

class ThemeFiles extends Facade {

    protected static function getFacadeAccessor() {
        return 'theme-files';
    }

}