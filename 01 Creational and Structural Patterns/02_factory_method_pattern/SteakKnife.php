<?php

class SteakKnife implements KnifeInterface
{
    public function __construct()
    {
        echo "\nCreating steak knife";
    }

    public function sharpen()
    {
        echo "\nSharpening steak knife";
    }

    public function polish()
    {
        echo "\nPolishing steak knife";
    }

    public function package()
    {
        echo "\nPackaging steak knife";
    }
}