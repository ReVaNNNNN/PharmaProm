<?php

namespace App;

class Math
{
    /**
     * @param $a
     * @param $b
     * @return int
     * @throws InvalidArgumentException
     */
    public function sum($a, $b)
    {
        if (!is_int($a) || !is_int($b)) {
            throw new InvalidArgumentException();
        }

        return $a + $b;
    }
}