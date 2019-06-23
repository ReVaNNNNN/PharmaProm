<?php

namespace Aqua;

/**
 * Class LightHasBeenLightedInAquariumEvent
 * @package Aqua
 * This is just simple example of implementation for event class to handel this kind of event.
 */

class LightHasBeenLightedInAquariumEvent extends Event
{
    public function handle(WaterPlaceInterface $place): void
    {
        foreach ($place->getCreatures() as $creature) {
            if ($creature instanceof Movable) {
                $creature->swim();
            }
        }
    }
}