<?php

use AshAllenDesign\ConfigValidator\Services\Rule;

return [
    Rule::make('valid_service.key')
        ->rules(['required', 'string', 'in:hello']),

    Rule::make('valid_service.secret')
        ->rules(['required', 'string', 'in:hello']),

    Rule::make('invalid_service.key')
        ->rules(['required', 'string', 'in:valid_option']),

    Rule::make('invalid_service.secret')
        ->rules(['required', 'string', 'in:valid_option']),
];
