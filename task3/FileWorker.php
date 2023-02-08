<?php

namespace task3;

class FileWorker
{
    public static string $dir = "text";

    public static function readFile($fileName): string
    {
        if (is_dir(self::$dir))
            return file_get_contents(self::$dir . '/' . $fileName);
    }

    public static function writeFile($fileName, $string): void
    {
        if (is_dir(self::$dir)) {
            $fd = fopen(self::$dir . '/' . $fileName, "a+");
            fwrite($fd, $string);
            fclose($fd);
        }
    }

    public static function clearFile($fileName): void
    {
        if (is_dir(self::$dir)) {
            $fd = fopen(self::$dir . '/' . $fileName, "w");
            fseek($fd, 0);
            fwrite($fd, "");
            fclose($fd);
        }
    }
}