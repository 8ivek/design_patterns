<?php

include_once('KnifeInterface.php');
include_once('KnifeFactory.php');
include_once('BreadKnife.php');
include_once('ChefsKnife.php');
include_once('SteakKnife.php');

class KnifeStore
{
    public static function orderKnife($knife_type)
    {
        try {
            $knife = KnifeFactory::create($knife_type);
            $knife->sharpen();
            $knife->polish();
            $knife->package();
            return $knife;
        } catch (Exception $e) {
            echo "\nException: " . $e->getMessage();
        }
    }
}

KnifeStore::orderKnife('steak');
KnifeStore::orderKnife('chefs');
KnifeStore::orderKnife('bread');