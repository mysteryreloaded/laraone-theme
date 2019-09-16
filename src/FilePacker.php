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

    public static function move()
    {
        // if(rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, realpath(dirname(__FILE__)) . "\ThemeCreateCommand.php")) {
        rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, ".\app\Commands\ThemeCreateCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themePackagePath, ".\app\Commands\ThemePackageCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themeSyncPath, ".\app\Commands\ThemeSyncCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::themeValidatePath, ".\app\Commands\ThemeValidateCommand.php");

        rename(realpath(dirname(__FILE__)) . FilePacker::schemasPath, ".\schemas");
        
    }
}