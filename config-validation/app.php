<?php

use AshAllenDesign\ConfigValidator\Services\Rule;

return [
    Rule::make('non_existent_field')
        ->rules(['required', 'string', 'in:https,http']),
];
