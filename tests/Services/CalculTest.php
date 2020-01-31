<?php

namespace App\Tests;

use App\Services\Calcul;
use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase
{
    /**
     * @dataProvider getMarks
     */
    public function testAverageMethodWithGoodMarks(float $result, int $firstMark, int $secondMark): void
    {
        $serviceCalcul = new Calcul();
        $this->assertSame($result, $serviceCalcul->average($firstMark, $secondMark));
    }

    public function getMarks(): ?\Generator
    {
        yield [12.5, 10, 15];
        yield [22.5, 30, 15];
        yield [25.0, 30, 20];
    }
}
