<?php

namespace mysteryreloaded\laraonetheme;

class FilePacker
{
    const themeCreatePath = "\ThemeCreateCommand.php";
    const themePackagePath = "\ThemePackageCommand.php";
    const themeSyncPath = "\ThemeSyncCommand.php";
    const themeValidatePath = "\ThemeValidateCommand.php";
    const schemasPath = "\schemas";

    public function __construct()
    {

    }

    public static function world()
    {
        return 'Hello World, Composer!';
    }

    public static function move()
    {
        // if(rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, realpath(dirname(__FILE__)) . "\ThemeCreateCommand.php")) {
        rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, "..\..\ThemeCreateCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themePackagePath, "..\..\ThemePackageCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themeSyncPath, "..\..\ThemeSyncCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themeValidatePath, "..\..\ThemeValidateCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::schemasPath, "..\..\schemas");
        
    }
}

// FilePacker::move();