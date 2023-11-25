<?php

use PhpCsFixer\{
    Config, Finder
};

$finder = Finder::create()->in(__DIR__ . '/src');

return (new Config)->setRules([
        'array_push' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
