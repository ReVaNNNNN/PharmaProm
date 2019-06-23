<?php


namespace Aqua;


interface WaterPlaceInterface
{
    public function addCreature(Creature $creature) : void;

    public function getCreatures() : array ;
}