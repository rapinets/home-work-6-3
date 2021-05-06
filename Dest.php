<?php


class Dest
{
    public function __construct()
    {

        if (file_exists("source.txt")){
            $file = file_get_contents("source.txt");
            $arr = explode(" ", $file);

            $reversed = array_reverse($arr);
            file_put_contents('dest.txt', implode(' ', $reversed));


        }

    }

    public function fileExist()
    {
        if (file_exists('dest.txt')){
            echo "Файл dest.txt створений. Слова записані із заду на перед";
        } else {
            echo "false";
        }
    }

}