<?php

return [
    'title' => 'Groups',
    'single' => 'group',
    'model' => 'App\Groups',
    'columns' => [
        'id',
        'title',
        'isActive',
        'URL_title'
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text'
        ],
        'isActive' => [
            'type' => 'bool'
        ],
        'URL_title' => [
            'type' => 'text'
        ]
    ]
];