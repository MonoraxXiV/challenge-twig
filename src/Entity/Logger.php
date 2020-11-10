<?php


namespace App\Entity;


class Logger
{
    //https://www.php.net/manual/en/function.file-put-contents.php
    //https://www.w3schools.com/php/func_filesystem_file_put_contents.asp
    //although the projected output seems a bit weird
    public function Logging()
    {
        file_put_contents(__DIR__.'log.info', $_POST['input'], FILE_APPEND );
    }
}