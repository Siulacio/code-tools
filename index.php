<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Calculadora;

$calculadora = new Calculadora;

echo $calculadora->sumar(2, 2);
