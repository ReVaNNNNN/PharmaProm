<?php

namespace Aqua;

class Aquarium implements WaterPlaceInterface
{
    private $filter;
    private $creatures = [];
    private $light = 0;

    public function __construct(AquariumFilterInterface $filter = null)
    {
        $this->filter = $filter;
    }

    public function addCreature(Creature $creature) : void
    {
        $this->creatures[] = $creature;
        //call event to send an e-mail and sms;
        event('CreatureHasBeenAddedToAquarium', $this);
    }

    public function getCreatures() : array
    {
        return $this->creatures;
    }

    public function turnOnLight() : void
    {
        $this->light = 1;
        // I believe there should be helper function to call an event :)
        event('LightHasBeenLightedInAquarium', $this);
    }

    public function turnOffLight() : void
    {
        $this->light = 0;
        event('LightHasBeenTurnedOffInAquarium', $this);
    }
}