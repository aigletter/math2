<?php


namespace itea\learning\math;


class Math
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sum($a, $b)
    {
        return $a + $b;
    }
}
