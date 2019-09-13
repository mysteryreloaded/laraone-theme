<?php

namespace mysteryreloaded\laraonetheme;

class FilePacker
{
    const themeCreatePath = "./ThemeCreateCommand.php";
    const themePackagePath = "./ThemePackageCommand.php";
    const themeSyncPath = "./ThemeSyncCommand.php";
    const themeValidatePath = "./ThemeValidateCommand.php";
    const schemasPath = "./schemas";

    public function __construct()
    {
        if(rename(FilePacker::themeCreatePath, "..../ThemeCreateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themePackagePath, "..../ThemePackageCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themeSyncPath, "..../ThemeSyncCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themeValidatePath, "..../ThemeValidateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::schemasPath, "..../schemas")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }
    }

    public static function world()
    {
        return 'Hello World, Composer!';
    }

    public static function move()
    {
        if(rename(FilePacker::themeCreatePath, "..../ThemeCreateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themePackagePath, "..../ThemePackageCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themeSyncPath, "..../ThemeSyncCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::themeValidatePath, "..../ThemeValidateCommand.php")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }

        if(rename(FilePacker::schemasPath, "..../schemas")) {
            echo "MOVE SUCCESS!";
        } else {
            echo "MOVE FAILED!";
        }
        
    }
}
