<?php

namespace strategy;

abstract class Duck
{
    public MoveInterface $move_type;

    public function Duck(MoveInterface $move_type)
    {
        $this->move_type = $move_type;
    }

    public function performMove()
    {
        $this->move_type->move();
    }
}