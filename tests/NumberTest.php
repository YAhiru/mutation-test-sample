<?php declare(strict_types=1);
namespace Yahiru\Tests;

use PHPUnit\Framework\TestCase;
use Yahiru\Mutation\Number;

final class NumberTest extends TestCase
{
    public function testIsSmallerThan()
    {
        $number = new Number(15);
        $this->assertTrue($number->isSmallerThan(20));
    }
}

