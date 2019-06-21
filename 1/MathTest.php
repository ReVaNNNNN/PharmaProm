<?php

// require_once ('vendor/autoload.php');

use App\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    /**
     * @param $a
     * @param $b
     * @return int
     * @throws InvalidArgumentException
     */
    private function getSum($a, $b)
    {
        $math = new Math();
        return $math->sum($a, $b);
    }

    public function test_sum_return_correct_result()
    {
        $this->assertEquals($this->getSum(5, 7), 12);
    }

    public function test_sum_return_integer()
    {
        $this->assertIsInt($this->getSum(5, 7));
    }

    public function test_throw_exception_when_first_argument_is_wrong()
    {
        $this->expectException(InvalidArgumentException::class);

        $a = 5.1;
        $b = 7;

        $this->getSum($a, $b);
    }

    public function test_throw_exception_when_second_argument_is_wrong()
    {
        $this->expectException(InvalidArgumentException::class);

        $a = 5;
        $b = '7';

        $this->getSum($a, $b);
    }

    public function test_throw_exception_when_both_arguments_are_wrong()
    {
        $this->expectException(InvalidArgumentException::class);

        $a = true;
        $b = null;

        $this->getSum($a, $b);
    }
}