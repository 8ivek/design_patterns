<?php

namespace strategy;

class MoveWithFeet implements MoveInterface
{
    public function move()
    {
        echo "I'm walking\n";
    }
}