<?php


namespace Aqua;

use Aqua\BreatheTrait;

class Fish extends Creature implements Movable
{
    protected $hungryLevel = 0;

    public function swim() : string
    {
        return 'I prefer classic style.';
    }
}