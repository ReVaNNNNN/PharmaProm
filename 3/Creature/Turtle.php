<?php


namespace Aqua;

use Aqua\BreatheTrait;

class Turtle extends Creature implements Movable
{
    protected $hungryLevel = 0;

    public function swim() : string
    {
        return 'I prefer swim like a turtle.';
    }
}