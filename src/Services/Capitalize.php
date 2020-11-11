<?php


namespace App\Services;


use App\Services\Transform;

class Capitalize implements Transform
{
    //https://stackoverflow.com/questions/7153801/how-to-capitalize-every-other-character-in-php
    //to dissect even more later
    public function Transform(string $string):string
    {
        // TODO: Implement Transform() method.

        $str=$_POST['input'];

        var_dump($str);
        foreach(str_split($str) as $index => $char) {
            $str.= ($index % 2) ? strtolower($char) : strtoupper($char);
            return $str;
        }


    }
}