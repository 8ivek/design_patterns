<?php

namespace strategy;

class SwimDuck extends Duck
{
    public function __construct(MoveInterface $move_type)
    {
        parent::Duck($move_type);
    }
}