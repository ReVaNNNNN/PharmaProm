<?php


namespace Aqua;


abstract class Event
{
    abstract protected function handle(WaterPlaceInterface $place) : void;
}