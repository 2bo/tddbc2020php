<?php

namespace Tddbc;

use InvalidArgumentException;

class ClosedRange
{
    private $lower;
    private $upper;

    public function __construct(int $lower, int $upper)
    {
        if ($upper < $lower) {
            throw new InvalidArgumentException();
        }
        $this->lower = $lower;
        $this->upper = $upper;
    }

    public function getLower(): int
    {
        return $this->lower;
    }

    public function getUpper(): int
    {
        return $this->upper;
    }

    public function toString(): string
    {
        return "[{$this->lower},{$this->upper}]";
    }

    /**
     * numberが閉区間ないにあるか
     */
    public function contains(int $number): bool
    {
        // 下端より小さい
        if ($number < $this->lower) {
            return false;
        }
        // 上端より大きい
        if ($this->upper < $number) {
            return false;
        }

        return true;
    }

    public function equals(self $target): bool
    {
        return ($target->getLower() === $this->lower && $target->getUpper() === $this->upper);
    }
}
