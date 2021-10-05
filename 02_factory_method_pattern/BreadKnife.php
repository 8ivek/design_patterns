<?php

class BreadKnife implements KnifeInterface
{
    public function __construct()
    {
        echo "\nCreating bread knife";
    }

    public function sharpen()
    {
        echo "\nSharpening bread knife";
    }

    public function polish()
    {
        echo "\nPolishing bread knife";
    }

    public function package()
    {
        echo "\nPackaging bread knife";
    }
}