<?php

declare(strict_types=1);

namespace App;

final class Calculadora
{
    public function sumar(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    public function restar(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }
}
