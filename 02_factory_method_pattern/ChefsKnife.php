<?php

class ChefsKnife implements KnifeInterface
{
    public function __construct()
    {
        echo "\nCreating chef knife";
    }

    public function sharpen()
    {
        echo "\nSharpening chef knife";
    }

    public function polish()
    {
        echo "\nPolishing chef knife";
    }

    public function package()
    {
        echo "\nPackaging chef knife";
    }
}