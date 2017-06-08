<?php

return [
    'title' => 'Audiences',
    'single' => 'audience',
    'model' => 'App\Audiences',
    'columns' => [
        'id',
        'title',
        'isActive'
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text'
        ],
        'isActive' => [
            'type' => 'bool'
        ]
    ]
];