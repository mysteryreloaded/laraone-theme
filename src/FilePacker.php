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
        if (!file_exists(".\app\Commands\ThemeCreateCommand.php")) {
            rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, ".\app\Commands\ThemeCreateCommand.php");
        }
        if (!file_exists(".\app\Commands\ThemePackageCommand.php")) {
            rename(realpath(dirname(__FILE__)) . FilePacker::themePackagePath, ".\app\Commands\ThemePackageCommand.php");
        }
        if (!file_exists(".\app\Commands\ThemeSyncCommand.php")) {
            rename(realpath(dirname(__FILE__)) . FilePacker::themeSyncPath, ".\app\Commands\ThemeSyncCommand.php");
        }
        if (!file_exists(".\app\Commands\ThemeValidateCommand.php")) {
            rename(realpath(dirname(__FILE__)) . FilePacker::themeValidatePath, ".\app\Commands\ThemeValidateCommand.php");
        }
        if (!file_exists(".\schemas")) {
            rename(realpath(dirname(__FILE__)) . FilePacker::schemasPath, ".\schemas");
        }
    }
}
FilePacker::move();