<?php

namespace strategy;

class MallardDuck extends Duck
{
    public function __construct(MoveInterface $move_type)
    {
        parent::Duck($move_type);
    }
}