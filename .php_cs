<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

return  PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@PSR2' => true,
        'include' => true,
        'no_leading_import_slash' => true,
        'no_extra_consecutive_blank_lines' => true,
        'no_leading_namespace_whitespace' => true,
    
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
    ])
;
