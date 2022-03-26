<?php

use AshAllenDesign\ConfigValidator\Services\Rule;

return [
    Rule::make('paths')
        ->rules(['required', 'array']),
];
