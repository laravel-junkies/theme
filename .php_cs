<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'ordered_imports' => [
            'sortAlgorithm' => 'alpha',
        ],
        'no_unused_imports' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ]);
