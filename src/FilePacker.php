<?php

namespace mysteryreloaded\laraonetheme;

class FilePacker
{
    const themeCreatePath = "\Commands\ThemeCreateCommand.php";
    const themePackagePath = "\Commands\ThemePackageCommand.php";
    const themeSyncPath = "\Commands\ThemeSyncCommand.php";
    const themeValidatePath = "\Commands\ThemeValidateCommand.php";
    const schemasPath = "\schemas";

    public function __construct()
    {

    }

    public static function move()
    {
        // if (file_exists(".\vendor\mysteryreloaded\laraone-theme\src\Commands\ThemeCreateCommand.php")) {
        //     rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, ".\app\Commands\ThemeCreateCommand.php");
        // }
        // if (file_exists(".\vendor\mysteryreloaded\laraone-theme\src\Commands\ThemePackageCommand.php")) {
        //     rename(realpath(dirname(__FILE__)) . FilePacker::themePackagePath, ".\app\Commands\ThemePackageCommand.php");
        // }
        // if (file_exists(".\vendor\mysteryreloaded\laraone-theme\src\Commands\ThemeSyncCommand.php")) {
        //     rename(realpath(dirname(__FILE__)) . FilePacker::themeSyncPath, ".\app\Commands\ThemeSyncCommand.php");
        // }
        // if (file_exists(".\vendor\mysteryreloaded\laraone-theme\src\Commands\ThemeValidateCommand.php")) {
        //     rename(realpath(dirname(__FILE__)) . FilePacker::themeValidatePath, ".\app\Commands\ThemeValidateCommand.php");
        // }
        // if (file_exists(".\vendor\mysteryreloaded\laraone-theme\src\schemas")) {
        //     rename(realpath(dirname(__FILE__)) . FilePacker::schemasPath, ".\schemas");
        // }
    }
}
// FilePacker::move();