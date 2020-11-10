<?php


namespace App\Entity;


use App\Services\Transform;

class Spaces implements Transform
{
    //https://www.w3schools.com/php/php_string.asp
    public function Transform(string $string):string
    {
        // TODO: Implement Transform() method.
        str_replace(" ","-",$_POST['input']);
    }
}