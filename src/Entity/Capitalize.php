<?php


namespace App\Entity;


use App\Services\Transform;

class Capitalize implements Transform
{
    //https://stackoverflow.com/questions/7153801/how-to-capitalize-every-other-character-in-php
    //to dissect even more later
    public function Transform(string $string)
    {
        // TODO: Implement Transform() method.

        $test=preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", $_POST['input']);
        return $test;
        /*
        $str = 'I made some research and found good answers here, they really helped me.';
        $str = preg_replace_callback('/(\w)(.?)/', 'altcase', $str);
        echo $str;

        function altcase($m)
        {
            return strtoupper($m[1]) . $m[2];
        }
        */
    }
}