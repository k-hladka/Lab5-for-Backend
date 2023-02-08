<?php

use \task3\FileWorker;

if (!is_dir("text")) {
    mkdir("text");

    for ($i = 1; $i < 4; $i++) {
        $z = fopen("text/file$i.txt", "w");
        fclose($z);
    }

    echo "Успішно створено директорію text і 3 файли<br>";
}

if (is_dir("text")) {
    include_once "FileWorker.php";

    FileWorker::writeFile("file1.txt", "Hello World!");
    echo FileWorker::readFile("file1.txt") . '<br>';
    FileWorker::clearFile("file1.txt");
}

