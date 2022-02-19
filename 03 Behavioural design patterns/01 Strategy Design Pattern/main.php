<?php

namespace strategy;

include_once('duck_type\Duck.php');
include_once('duck_type\MallardDuck.php');
include_once('duck_type\SwimDuck.php');
include_once('duck_type\WalkDuck.php');

include_once('move_type\MoveInterface.php');
include_once('move_type\MoveWithFeet.php');
include_once('move_type\MoveWithWings.php');
include_once('move_type\MoveInWater.php');

class main
{
    public static function run()
    {
        $move_with_wings = new MoveWithWings();
        $mallard_duck = new MallardDuck($move_with_wings);
        $mallard_duck->performMove();

        $move_in_water = new MoveInWater();
        $swim_duck = new SwimDuck($move_in_water);
        $swim_duck->performMove();

        $move_with_feet = new MoveWithFeet();
        $walk_duck = new WalkDuck($move_with_feet);
        $walk_duck->performMove();
    }
}

$program = new main();
$program::run();