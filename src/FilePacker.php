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
        if(rename(realpath(dirname(__FILE__)) . FilePacker::themeCreatePath, "..\..\ThemeCreateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(realpath(dirname(__FILE__)) . FilePacker::themePackagePath, "..\..\ThemePackageCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(realpath(dirname(__FILE__)) . FilePacker::themeSyncPath, "..\..\ThemeSyncCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(realpath(dirname(__FILE__)) . FilePacker::themeValidatePath, "..\..\ThemeValidateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(realpath(dirname(__FILE__)) . FilePacker::schemasPath, "..\..\schemas")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }
        
    }
}

FilePacker::move();