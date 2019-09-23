<?php declare(strict_types=1);
namespace Yahiru\Mutation;

class Number
{
    /** @var int */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function isSmallerThan(int $value): bool
    {
        return $this->value < $value;
    }
}

