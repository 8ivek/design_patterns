<?php

namespace strategy;

class WalkDuck extends Duck
{
    public function __construct(MoveInterface $move_type)
    {
        parent::Duck($move_type);
    }
}